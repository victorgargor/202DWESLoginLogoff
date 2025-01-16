/**
 * @author Víctor García Gordón
 * @version Fecha de última modificación 16/01/2025
 */

let indiceActual = 0;

function moverSlide(paso) {
    const archivos = document.querySelectorAll('.carrusel-pdf .pdf-item');
    const totalArchivos = archivos.length;

    // Elimina la clase 'active' de todos los elementos
    archivos.forEach((archivo) => {
        archivo.classList.remove('active');
    });

    // Calcula el nuevo índice
    indiceActual = (indiceActual + paso + totalArchivos) % totalArchivos;

    // Muestra el PDF correspondiente
    archivos[indiceActual].classList.add('active');
}

// Inicializar el carrusel cuando la página se haya cargado
document.addEventListener('DOMContentLoaded', () => {
    moverSlide(0);
});

