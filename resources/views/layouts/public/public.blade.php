<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesano Studio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--principal)] text-white font-sans">

    <header class="fixed top-0 left-0 w-full z-50 bg-[var(--principal)] backdrop-blur">
        <nav class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between uppercase text-sm tracking-widest">
            <a href="#inicio" class="font-bold">Artesano Studio</a>

            <div class="flex gap-8">
                <a href="#inicio" class="hover:text-[#var(--secundario)]">Home</a>
                <a href="#trabajos" class="hover:text-[var(--secundario)]">Trabajos</a>
                <a href="#servicios" class="hover:text-[var(--secundario)]">Servicios</a>
                <a href="#estudio" class="hover:text-[var(--secundario)]">El estudio</a>
                <a href="#equipo" class="hover:text-[var(--secundario)]">Equipo</a>
                <a href="#contacto" class="hover:text-[var(--secundario)]">Contacto</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>