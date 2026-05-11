<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesano Studio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--principal)] text-white font-sans">

    <header class="fixed top-0 left-0 w-full z-50 bg-[var(--principal)]/90 backdrop-blur">
        <!-- NAVEGADOR -->
        <nav class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between uppercase text-sm tracking-widest">
            <a href="#inicio" class="font-bold">Artesano Studio</a>
            <div class="flex gap-8">
                <a href="#inicio" class="hover:text-[var(--secundario)]">Home</a>
                <a href="#trabajos" class="hover:text-[var(--secundario)]">Trabajos</a>
                <a href="#servicios" class="hover:text-[var(--secundario)]">Servicios</a>
                <a href="#estudio" class="hover:text-[var(--secundario)]">El estudio</a>
                <a href="#equipo" class="hover:text-[var(--secundario)]">Equipo</a>
                <a href="#contacto" class="hover:text-[var(--secundario)]">Contacto</a>
            </div>
        </nav>
    </header>

    <main>

        <!-- HOME -->
        <section id="inicio" class="min-h-screen pt-28 px-6 flex items-center">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-[var(--secundario)] h-[500px] rounded-lg"></div>

                <div>
                    <h1 class="text-5xl md:text-7xl uppercase mb-8">
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
                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Filmmaking</h3>
                        <p class="text-[var(--secundario)]">Producción audiovisual y creación de contenido visual.</p>
                    </article>

                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Fotografía</h3>
                        <p class="text-[var(--secundario)]">Trabajo visual centrado en composición, detalle e identidad.</p>
                    </article>

                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Web Design</h3>
                        <p class="text-[var(--secundario)]">Diseño y desarrollo de experiencias web creativas.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- EL ESTUDIO -->
        <section id="estudio" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl uppercase mb-8">El estudio</h2>
                    <p class="text-[var(--secundario)] leading-relaxed">
                        Espacio de trabajo donde se desarrollan proyectos audiovisuales, musicales y digitales.
                    </p>
                </div>

                <div class="bg-[var(--secundario)] h-[400px] rounded-lg"></div>
            </div>
        </section>

        <!-- EQUIPO -->
        <section id="equipo" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl uppercase mb-10">Equipo</h2>

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
                </div>
            </div>
        </section>

        <!-- CONTACTO -->
        <section id="contacto" class="min-h-screen pt-28 px-6 flex items-center">
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

                <form action="{{ route('contacto.store') }}" method="POST" class="max-w-md mx-auto bg-white/20 p-8 rounded-lg">
                    @csrf

                    <!-- Nombre y apellidos -->
                    <div class="mb-4">
                        <input type="text" name="nombre" placeholder="Nombre y apellidos"
                            value="{{ old('nombre') }}"
                            class="w-full bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none ">

                        @error('nombre')
                        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <input type="email" name="email" placeholder="Correo electrónico"
                            value="{{ old('email') }}"
                            class="w-full bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">

                        @error('email')
                        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Asunto -->
                    <div class="mb-4">
                        <input type="text" name="asunto" placeholder="Asunto"
                            value="{{ old('asunto') }}"
                            class="w-full bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">

                        @error('asunto')
                        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mensaje -->
                    <div class="mb-6">
                        <textarea name="mensaje" placeholder="Mensaje"
                            class="w-full bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">{{ old('mensaje') }}</textarea>

                        @error('mensaje')
                        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full border border-white py-3 uppercase hover:bg-white hover:text-[var(--principal)] transition">
                        Enviar
                    </button>
                </form>
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