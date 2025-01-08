<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 08/01/2025
 */

// Cargar el contenido del archivo README.md
$readmeFile = "README.md";
$readmeContent = file_exists($readmeFile) ? file_get_contents($readmeFile) : "Archivo README.md no encontrado.";

// Incluir Parsedown para convertir Markdown a HTML
require_once "core/Parsedown.php";
$Parsedown = new Parsedown();
$readmeHTML = $Parsedown->text($readmeContent);
?> 
<form>
    <input type="submit" name="login" value="Login">
</form>
<section>
    <div id="readme-content">
        <?= $readmeHTML; ?>
    </div>
    <div>
        <a class="españa" href="?idioma=es">
            <img src="doc/españa.png" alt="es">
        </a>
        <a class="inglaterra" href="?idioma=en">
            <img src="doc/inglaterra.png" alt="en">
        </a>
        <a class="portugal" href="?idioma=pt">
            <img src="doc/portugal.png" alt="pt">
        </a>
    </div>
    <script href="../webroot/js/banderas.js"></script>
</section>