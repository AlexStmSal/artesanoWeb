<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesano Studio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--principal)] text-white font-sans">

    <header class="fixed top-0 left-0 w-full z-50 bg-[var(--principal)]/80 backdrop-blur-md">

        <!-- NAVEGADOR -->
        <nav class="max-w-5xl mx-auto px-6 py-5 grid grid-cols-[1fr_auto_1fr] items-center uppercase text-sm tracking-widest">

            <!-- Enlaces izquierda -->
            <div class="flex justify-end gap-7">
                <a href="#inicio" class="hover:text-[var(--secundario)] whitespace-nowrap">Home</a>
                <a href="#trabajos" class="hover:text-[var(--secundario)] whitespace-nowrap">Trabajos</a>
                <a href="#servicios" class="hover:text-[var(--secundario)] whitespace-nowrap">Servicios</a>
            </div>

            <!-- Logo centrado -->
            <a href="#inicio" class="flex justify-center mx-12">
                <img
                    src="{{ asset('img/logo/logo-artesano-nav.png') }}"
                    alt="Logotipo de Artesano Studio"
                    class="h-16 w-auto">
            </a>

            <!-- Enlaces derecha -->
            <div class="flex justify-start gap-8">
                <a href="#estudio" class="hover:text-[var(--secundario)] whitespace-nowrap">El estudio</a>
                <a href="#equipo" class="hover:text-[var(--secundario)] whitespace-nowrap">Equipo</a>
                <a href="#contacto" class="hover:text-[var(--secundario)] whitespace-nowrap">Contacto</a>
            </div>

        </nav>
    </header>

    <main>

        <!-- HOME -->
        <section id="inicio" class="min-h-screen pt-36 px-6 flex items-center">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-[1.05fr_0.95fr] gap-16 items-center">

                <img
                    src="{{ asset('img/home/artesano_hor_home_1.jpg') }}"
                    alt="Imagen principal de Artesano Studio"
                    class="w-full h-[560px] object-cover rounded-lg">

                <div>
                    <h1 class="text-6xl md:text-8xl uppercase mb-8 leading-[0.95]">
                        Where silence speaks,<br>Artesano thinks
                    </h1>

                    <p class="max-w-md leading-relaxed text-[var(--secundario)]">
                        Artesano Studio es un estudio creativo que trabaja desde la observación y el detalle.
                    </p>
                </div>

            </div>
        </section>


        <!-- TRABAJOS -->
        <section id="trabajos" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl uppercase mb-10">Trabajos</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($trabajos as $trabajo)
                    <article class="bg-white/20 rounded-lg overflow-hidden">
                        <iframe
                            src="{{ $trabajo->url_video }}"
                            title="{{ $trabajo->titulo }}"
                            class="w-full h-52"
                            allowfullscreen>
                        </iframe>

                        <div class="p-5">
                            <h3 class="uppercase text-xl mb-3">
                                {{ $trabajo->titulo }}
                            </h3>

                            @if($trabajo->descripcion)
                            <p class="text-[var(--secundario)]">
                                {{ $trabajo->descripcion }}
                            </p>
                            @endif
                        </div>
                    </article>
                    @empty
                    <p class="text-[var(--secundario)]">
                        No hay trabajos disponibles.
                    </p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- SERVICIOS -->
        <section id="servicios" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">

                <h2 class="text-4xl uppercase mb-10">Servicios</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Filmaking -->
                    <article class="group relative h-[620px] rounded-lg overflow-hidden bg-white/10">
                        <img
                            src="{{ asset('img/servicios/artesano_ver_servicios_video.jpg') }}"
                            alt="Servicio de filmmaking en Artesano Studio"
                            class="w-full h-full object-cover">

                        <div class="absolute bottom-0 left-0 w-full h-[110px] group-hover:h-[200px] bg-gradient-to-t from-black/40 via-black/15 to-transparent backdrop-blur-sm px-8 transition-all duration-500 ease-in-out flex flex-col justify-center group-hover:justify-start group-hover:py-8">
                            <h3 class="uppercase text-4xl md:text-5xl leading-none tracking-wide transition-all duration-500 ease-in-out">
                                Filmmaking
                            </h3>

                            <p class="mt-6 max-w-sm text-[var(--secundario)] leading-relaxed opacity-0 max-h-0 overflow-hidden translate-y-4 group-hover:opacity-100 group-hover:max-h-40 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                                Producción audiovisual y creación de contenido visual.
                            </p>
                        </div>
                    </article>

                    <!-- Fotografía -->
                    <article class="group relative h-[620px] rounded-lg overflow-hidden bg-white/10">

                        <img
                            src="{{ asset('img/servicios/artesano_ver_servicios_foto.jpg') }}"
                            alt="Servicio de fotografía en Artesano Studio"
                            class="w-full h-full object-cover">

                        <div class="absolute bottom-0 left-0 w-full h-[110px] group-hover:h-[200px] bg-gradient-to-t from-black/40 via-black/15 to-transparent backdrop-blur-sm px-8 transition-all duration-500 ease-in-out flex flex-col justify-center group-hover:justify-start group-hover:py-8">
                            <h3 class="uppercase text-4xl md:text-5xl leading-none tracking-wide transition-all duration-500 ease-in-out">
                                Fotografía
                            </h3>

                            <p class="mt-6 max-w-sm text-[var(--secundario)] leading-relaxed opacity-0 max-h-0 overflow-hidden translate-y-4 group-hover:opacity-100 group-hover:max-h-40 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                                Trabajo visual centrado en composición, detalle e identidad.
                            </p>

                        </div>
                    </article>

                    <!-- Web -->
                    <article class="group relative h-[620px] rounded-lg overflow-hidden bg-white/10">

                        <img
                            src="{{ asset('img/servicios/artesano_ver_servicios_web.jpg') }}"
                            alt="Servicio de diseño web en Artesano Studio"
                            class="w-full h-full object-cover">

                        <div class="absolute bottom-0 left-0 w-full h-[110px] group-hover:h-[200px] bg-gradient-to-t from-black/40 via-black/15 to-transparent backdrop-blur-sm px-8 transition-all duration-500 ease-in-out flex flex-col justify-center group-hover:justify-start group-hover:py-8">
                            <h3 class="uppercase text-4xl md:text-5xl leading-none tracking-wide transition-all duration-500 ease-in-out">
                                Web Design
                            </h3>

                            <p class="mt-6 max-w-sm text-[var(--secundario)] leading-relaxed opacity-0 max-h-0 overflow-hidden translate-y-4 group-hover:opacity-100 group-hover:max-h-40 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                                Diseño y desarrollo de experiencias web creativas.
                            </p>

                        </div>
                    </article>

                </div>
            </div>
        </section>


        <!-- EL ESTUDIO -->
        <section id="estudio" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">

                <h2 class="text-4xl uppercase mb-10">El estudio</h2>

                <div class="grid grid-cols-1 md:grid-cols-[0.75fr_1.25fr] gap-12 items-start">

                    <!-- Texto -->
                    <div>
                        <p class="text-[var(--secundario)] leading-relaxed max-w-md">
                            Espacio de trabajo donde se desarrollan proyectos audiovisuales, musicales y digitales.
                            Un entorno pensado para la creación, la producción y el cuidado del detalle en cada proyecto.
                        </p>
                    </div>

                    <!-- Carrusel -->
                    <div
                        id="estudio-carrusel"
                        class="w-full"
                        data-imagenes='[
                    "{{ asset('img/estudio/artesano_hor_estudio_1.jpg') }}",
                    "{{ asset('img/estudio/artesano_hor_estudio_2.jpg') }}",
                    "{{ asset('img/estudio/artesano_hor_estudio_3.jpg') }}",
                    "{{ asset('img/estudio/artesano_hor_estudio_4.jpg') }}",
                    "{{ asset('img/estudio/artesano_hor_estudio_5.jpg') }}"
                ]'>

                        <div class="relative rounded-lg overflow-hidden bg-white/10">
                            <!-- Imagen principal -->
                            <img
                                id="estudio-imagen-principal"
                                src="{{ asset('img/estudio/artesano_hor_estudio_1.jpg') }}"
                                alt="Imagen principal del estudio Artesano Studio"
                                class="w-full h-[480px] object-cover transition-all duration-500">

                            <!-- Flecha izquierda -->
                            <button
                                type="button"
                                id="estudio-prev"
                                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 backdrop-blur-sm px-4 py-3 rounded-full hover:bg-black/50 transition"
                                aria-label="Imagen anterior">
                                ‹
                            </button>

                            <!-- Flecha derecha -->
                            <button
                                type="button"
                                id="estudio-next"
                                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 backdrop-blur-sm px-4 py-3 rounded-full hover:bg-black/50 transition"
                                aria-label="Imagen siguiente">
                                ›
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EQUIPO -->
        <section id="equipo" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl uppercase mb-10">Equipo</h2>

                <!-- Filtros públicos -->
                <form method="GET" action="{{ route('home') }}#equipo" class="bg-white/20 p-6 rounded-lg mb-8 grid grid-cols-1 md:grid-cols-3 gap-4">

                    <input type="text" name="buscar_equipo" placeholder="Buscar equipo, marca o modelo"
                        value="{{ request('buscar_equipo') }}"
                        class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

                    <select name="categoria_id"
                        class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white focus:outline-none focus:border-white">
                        <option value="" class="text-black">Todas las categorías</option>

                        @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" class="text-black" @selected(request('categoria_id')==$categoria->id)>
                            {{ $categoria->nombre }}
                        </option>
                        @endforeach

                    </select>

                    <button type="submit" class="border border-white py-2 uppercase hover:bg-white hover:text-[var(--principal)] transition">
                        Filtrar
                    </button>
                </form>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-white/40 uppercase">
                                <th class="py-3">Tipo</th>
                                <th class="py-3">Equipo</th>
                                <th class="py-3">Marca</th>
                                <th class="py-3">Cantidad</th>
                            </tr>
                        </thead>

                        <!-- Recorre los equipos recibidos desde HomeController y los muestra en la tabla -->
                        <tbody>
                            @forelse($equipos as $equipo)
                            <tr class="border-b border-white/20">
                                <td class="py-3">
                                    {{ $equipo->categoria->nombre ?? 'Sin categoría' }}
                                </td>
                                <td class="py-3">
                                    {{ $equipo->nombre }}
                                </td>
                                <td class="py-3">
                                    {{ $equipo->marca }}
                                </td>
                                <td class="py-3">
                                    {{ $equipo->cantidad }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-6 text-center text-[var(--secundario)]">
                                    No hay equipos disponibles.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                    <!-- Paginación (máximo 10 items) -->
                    <div class="mt-6">
                        {{ $equipos->fragment('equipo')->links() }}
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACTO -->
        <section id="contacto" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto w-full">

                <h2 class="text-4xl uppercase mb-10">Contacto</h2>

                <!-- Mostrar mensaje de éxito cuando el form se envió correctamente -->
                @if(session('success'))
                <div class="max-w-md mx-auto mb-6 bg-white text-[var(--principal)] px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Mostrar aviso general en caso de error -->
                @if($errors->any())
                <div class="max-w-md mx-auto mb-6 bg-red-100 text-red-700 px-4 py-3 rounded">
                    Revisa los campos del formulario.
                </div>
                @endif

                <div class="min-h-[600px] grid grid-cols-1 md:grid-cols-[1fr_1.15fr_1fr] gap-10 items-center">

                    <!-- Texto decorativo izquierda -->
                    <div class="hidden md:flex justify-end">
                        <span class="text-8xl lg:text-9xl uppercase leading-none tracking-wide ">
                            Let's
                        </span>
                    </div>

                    <!-- Formulario -->
                    <form action="{{ route('contacto.store') }}" method="POST" class="w-full max-w-xl mx-auto bg-white/20 p-10 rounded-lg">
                        @csrf

                        <!-- Nombre y apellidos -->
                        <div class="mb-5">
                            <input type="text" name="nombre" placeholder="Nombre y apellidos"
                                value="{{ old('nombre') }}"
                                class="w-full bg-transparent border-b border-white py-3 placeholder-white/70 focus:outline-none">

                            @error('nombre')
                            <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-5">
                            <input type="email" name="email" placeholder="Correo electrónico"
                                value="{{ old('email') }}"
                                class="w-full bg-transparent border-b border-white py-3 placeholder-white/70 focus:outline-none">

                            @error('email')
                            <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Asunto -->
                        <div class="mb-5">
                            <input type="text" name="asunto" placeholder="Asunto"
                                value="{{ old('asunto') }}"
                                class="w-full bg-transparent border-b border-white py-3 placeholder-white/70 focus:outline-none">

                            @error('asunto')
                            <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-8">
                            <textarea name="mensaje" placeholder="Mensaje" rows="4"
                                class="w-full bg-transparent border-b border-white py-3 placeholder-white/70 focus:outline-none resize-none">{{ old('mensaje') }}</textarea>

                            @error('mensaje')
                            <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full border border-white py-3 uppercase hover:bg-white hover:text-[var(--principal)] transition">
                            Enviar
                        </button>
                    </form>

                    <!-- Texto decorativo derecha -->
                    <div class="hidden md:flex justify-start">
                        <span class="text-8xl lg:text-9xl uppercase leading-none tracking-wide">
                            Talk
                        </span>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <!-- FOOTER -->
    <footer class="px-6 py-10 border-t border-white/20 bg-white/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">

            <div class="text-center md:text-left">
                <p class="uppercase tracking-widest font-bold">
                    Artesano Studio
                </p>

                <p class="text-sm text-[var(--secundario)] mt-2">
                    Filmmaking, diseño web y producción creativa.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6 uppercase text-sm tracking-widest">
                <a href="mailto:contacto@artesanostudio.com" class="hover:text-[var(--secundario)]">
                    Email
                </a>

                <a href="https://wa.me/34600000000" target="_blank" rel="noopener noreferrer" class="hover:text-[var(--secundario)]">
                    WhatsApp
                </a>

                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="hover:text-[var(--secundario)]">
                    Instagram
                </a>

            </div>

            <div class="text-sm text-[var(--secundario)] text-center md:text-right">
                © {{ date('Y') }} Artesano Studio
            </div>

        </div>
    </footer>

</body>

</html>