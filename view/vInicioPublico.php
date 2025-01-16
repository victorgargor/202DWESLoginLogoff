<?php
/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 08/01/2025
 */
?>

<form>
    <input type="submit" name="login" value="Login">
</form>
<section class="content-container">
    <div class="carrusel">
        <div class="carrusel-pdf">
            <div class="pdf-item active">
                <div class="nombre-pdf">Arbol de Navegación</div>
                <object data="doc/ArbolDeNavegación.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Catálogo de Requisitos</div>
                <object data="doc/CatalogoDeRequisitos.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Diagrama de Casos de Uso</div>
                <object data="doc/DiagramaDeCasosDeUso.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Diagrama de Clases</div>
                <object data="doc/DiagramaDeClases.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Estructura de Almacenamiento</div>
                <object data="doc/EstructuraAlmacenamientoDWES.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Relacion de Ficheros</div>
                <object data="doc/RelacionDeFicheros.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Secuencia Desarrollo CRUD</div>
                <object data="doc/SecuenciaDesarrolloCRUDcompleto.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
            <div class="pdf-item">
                <div class="nombre-pdf">Uso de la Sesión</div>
                <object data="doc/UsoDeLaSesion.pdf" type="application/pdf" width="1400" height="700"></object>
            </div>
        </div>
        <button class="prev" onclick="moverSlide(-1)">&#10094;</button>
        <button class="next" onclick="moverSlide(1)">&#10095;</button>
    </div>
     <script src="webroot/js/carrousel.js"></script>
</section>
<section>
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
    <script src="webroot/js/banderas.js"></script>
</section>
