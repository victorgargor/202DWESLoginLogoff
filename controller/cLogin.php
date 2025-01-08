<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 08/01/2025
 */

if (isset($_REQUEST['volver'])) {
    // Establece la variable de sesión 'paginaEnCurso' en 'inicioPublico'
    $_SESSION['paginaEnCurso'] = 'inicioPublico';
    require_once $aControladores[$_SESSION['paginaEnCurso']];
    exit();
}

// Variable para indicar que las respuestas son correctas
$entradaOK = true;

$aErrores = [
    'usuario' => '',
    'contrasena' => ''
];

if (isset($_REQUEST['iniciarsesion'])) { 
    // Guardamos en la sesion la pagina anterior y le ponemos el login
    $_SESSION['paginaAnterior']='login';

    // Validamos si el usuario existe y es oUsuarioActivo 
    $oUsuarioActivo = UsuarioPDO::validarUsuario($_REQUEST['usuario'], $_REQUEST['contrasena']);

    // Comprobamos si '$oUsuarioActivo' no esta declarado o es 'null'
    if (!isset($oUsuarioActivo)) {
        $entradaOK = false;
    }
   
    $aErrores = [
        'usuario' => (!$oUsuarioActivo) ? 'Error de autentificacion.' : validacionFormularios::comprobarAlfaNumerico($_REQUEST['usuario'], 32, 4, 1),
        'contrasena' => (!$oUsuarioActivo) ? 'Error de autentificacion.' : validacionFormularios::validarPassword($_REQUEST['contrasena'], 32, 4, 2, 1)
    ];

    // Recorre aErrores para ver si hay algun error
    foreach ($aErrores as $campo => $valor) {
        if ($valor != null) {
            //Ponemos la entradaOK a false
            $entradaOK = false;
            // Limpiamos el campo
            $_REQUEST[$campo] = '';
        }
    }
   
} else {
    //Ponemos la entradaOK a false
    $entradaOK = false;
}

if ($entradaOK) {
        // Actualizamos la fecha y hora de la última conexión
        $oUsuarioActivo = UsuarioPDO::registrarUltimaConexion($oUsuarioActivo);

        $_SESSION['usuario'] = $oUsuarioActivo;
        $_SESSION['paginaEnCurso'] = 'inicioPrivado';

        //Importamos la sesion se la paginaActiva
        require_once $aControladores[$_SESSION['paginaEnCurso']];    
        exit();
         
        // Se cierra la conexion con la base de datos
        unset($miDB);
} else {
    // Cargo la vLogin
    require_once $aVistas['layout'];
}