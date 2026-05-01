<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artesano Studio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#8f896c] text-white font-sans">

    <header class="fixed top-0 left-0 w-full z-50 bg-[#8f896c]/90 backdrop-blur">
        <nav class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between uppercase text-sm tracking-widest">
            <a href="#inicio" class="font-bold">Artesano Studio</a>

            <div class="flex gap-8">
                <a href="#inicio" class="hover:text-[#e4e2dd]">Home</a>
                <a href="#trabajos" class="hover:text-[#e4e2dd]">Trabajos</a>
                <a href="#servicios" class="hover:text-[#e4e2dd]">Servicios</a>
                <a href="#estudio" class="hover:text-[#e4e2dd]">El estudio</a>
                <a href="#equipo" class="hover:text-[#e4e2dd]">Equipo</a>
                <a href="#contacto" class="hover:text-[#e4e2dd]">Contacto</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>