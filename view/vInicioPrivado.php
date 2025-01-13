<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 09/01/2025 
 */
?>

<img class="aplicacion" src="doc/aplicacion.png" alt="aplicacion">
<div class="descripcion-usuario">
    <?php
        // Muestra el nombre del usuario en mayúsculas
        echo strtoupper($nombreUsuario);
    ?>
</div>
<form>
    <input type="submit" name="cerrarsesion" value="Cerrar Sesión">
</form>
