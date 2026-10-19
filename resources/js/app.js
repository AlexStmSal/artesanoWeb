
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
   TRABAJOS - Animación al hacer scroll
========================================== */

document.addEventListener('DOMContentLoaded', () => {
    const titulo = document.getElementById('titulo-trabajos');
    const contenedor = document.querySelector(
        '.titulo-trabajos-contenedor'
    );

    if (!titulo || !contenedor) return;

    // Si el usuario prefiere reducir animaciones
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        titulo.classList.add('animar');
        return;
    }

    // Si IntersectionObserver no está disponible
    if (!('IntersectionObserver' in window)) {
        titulo.classList.add('animar');
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                titulo.classList.add('animar');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3
    });

    observer.observe(contenedor);
});

