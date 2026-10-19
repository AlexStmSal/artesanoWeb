
/* ==========================================
   IMPORTACIONES
========================================== */

import "./bootstrap";
import "./estudio-carrusel";

import Alpine from "alpinejs";


/* ==========================================
   ALPINE JS
========================================== */

window.Alpine = Alpine;

Alpine.start();


/* ==========================================
   TÍTULOS - Animación general
========================================== */

document.addEventListener('DOMContentLoaded', () => {

    // Seleccionamos todos los títulos de sección
    const titulos = document.querySelectorAll('.titulo-seccion');

    if (!titulos.length) return;

    // Comprueba si el usuario prefiere menos movimiento
    const movimientoReducido = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    // Sin animaciones o sin IntersectionObserver:
    // mantenemos los títulos visibles
    if (
        movimientoReducido ||
        !('IntersectionObserver' in window)
    ) {
        return;
    }

    // Creamos un único observador para todos los títulos
    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                const contenedor = entry.target;

                const titulo = contenedor.querySelector(
                    '.titulo-seccion'
                );

                if (!titulo) return;

                // Ejecutamos la animación
                titulo.classList.remove('preparado');
                titulo.classList.add('animar');

                // Evitamos que vuelva a ejecutarse
                observer.unobserve(contenedor);
            }

        });

    }, {
        threshold: 0.3
    });

    // Preparamos y observamos todos los títulos
    titulos.forEach((titulo) => {

        const contenedor = titulo.closest(
            '.titulo-seccion-contenedor'
        );

        if (!contenedor) return;

        // Preparamos el título para entrar desde la izquierda
        titulo.classList.add('preparado');

        // Observamos el contenedor en su posición real
        observer.observe(contenedor);

    });

});
