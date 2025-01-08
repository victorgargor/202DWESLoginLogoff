<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 08/01/2025
 */

class DBPDO implements DB {
    
    #[\Override]
    public static function ejecutarConsulta($sentenciaSQL) {
        try {
            // Establecemos la conexión con la BD
            $miDB = new PDO(DSN, USERNAME, PASSWORD);

            // Prepara la consulta
            $oConsulta = $miDB->prepare($sentenciaSQL);
            
            // Ejecuta la consulta       
            $oConsulta->execute();
            
            // Devuelvo el resultado
            return $oConsulta;
        } catch (PDOException $excepcion) {
            // Guardamos en la sesion la pagina actual y le asignamos la de error
            $_SESSION['paginaEnCurso'] = 'error';

            // Almaceno un objeto de la clase Error
            $_SESSION['error'] = new Error($excepcion->getCode(), $excepcion->getMessage(), $excepcion->getFile(), $excepcion->getLine());
            
            //Redirige al usuario al index
            header('Location: indexLoginLogoff.php');
            exit();  
          
        } finally {
            // Cierra la conexión con la BD
            unset($miDB);
        }
    }
}