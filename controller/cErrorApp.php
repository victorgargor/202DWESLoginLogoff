<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 10/01/2025 
 */

// Si se pulsa el botón volver
if (isset($_REQUEST['volver'])) {    
    // Asigno a la página en curso la página anterior
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    
    // Cierro la sesión 
    unset($_SESSION['error']); 
   
    // Redirijo al index
    header('Location: ../202DWESLoginLogoff/indexLoginLogoff.php'); 
    exit();
}

// Asigno los datos de $_SESSION['error']
$codError = $_SESSION['error']->getCodError(); // Código del error
$descError = $_SESSION['error']->getDescError(); // Descripción del error
$archivoError = $_SESSION['error']->getArchivoError(); // Archivo donde ocurrio el error
$lineaError = $_SESSION['error']->getLineaError(); // Línea en la cual se produjo el error

require_once $aVistas['layout']; // Cargo la vista de 'error'