document.addEventListener("DOMContentLoaded", () => {
    //Obtener el carrusel
    const carruselEstudio = document.getElementById("estudio-carrusel");

    //Si no existe, termina la ejecución
    if (!carruselEstudio) {
        return;
    }

    //Arr de imágenes guardadas desde data-imagenes del HTML
    const imagenesEstudio = JSON.parse(carruselEstudio.dataset.imagenes);

    //Contador de imagen mostrada
    let indiceEstudio = 0;

    //Obtener la imagen grande
    const imagenPrincipalEstudio = document.getElementById(
        "estudio-imagen-principal",
    );

    //Botón anterior
    const botonPrevEstudio = document.getElementById("estudio-prev");

    //Botón siguiente
    const botonNextEstudio = document.getElementById("estudio-next");

    //Comprobación general. Si falta algún elemento, termina la ejecución
    if (!imagenPrincipalEstudio || !botonPrevEstudio || !botonNextEstudio) {
        return;
    }

    /**
     * Actualiza la imagen principal del carrusel con una transición suave
     */
    function actualizarCarruselEstudio() {
        imagenPrincipalEstudio.classList.add("opacity-0");

        setTimeout(() => {
            imagenPrincipalEstudio.src = imagenesEstudio[indiceEstudio];
            imagenPrincipalEstudio.classList.remove("opacity-0");
        }, 300);
    }

    /**
     * Muestra la imagen anterior
     */
    function mostrarImagenAnterior() {
        indiceEstudio =
            (indiceEstudio - 1 + imagenesEstudio.length) %
            imagenesEstudio.length;

        actualizarCarruselEstudio();
    }

    /**
     * Muestra la siguiente imagen
     */
    function mostrarImagenSiguiente() {
        indiceEstudio = (indiceEstudio + 1) % imagenesEstudio.length;

        actualizarCarruselEstudio();
    }

    //Al pulsar la flecha izquierda, se muestra la img anterior
    botonPrevEstudio.addEventListener("click", () => {
        mostrarImagenAnterior();
    });

    //Al pulsar la flecha derecha, se muestra la img imagen
    botonNextEstudio.addEventListener("click", () => {
        mostrarImagenSiguiente();
    });

    //Cambio automático de imagen cada 15 seg
    setInterval(() => {
        mostrarImagenSiguiente();
    }, 15000);

    //Inicializar el carrusel al cargar la página
    actualizarCarruselEstudio();
});
