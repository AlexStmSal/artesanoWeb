<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Admin - Artesano Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#8f896c] text-white min-h-screen">

    <header class="bg-white/10 border-b border-white/20">
        <!-- Navegador Admin -->
        <nav class="max-w-7xl mx-auto px-8 py-5 flex items-center justify-between">
            <a href="{{ route('admin.equipos.index') }}" class="uppercase tracking-widest font-bold">
                Admin Artesano
            </a>

            <div class="flex gap-6 uppercase text-sm tracking-widest">
                <a href="{{ route('admin.equipos.index') }}" class="hover:text-[#e4e2dd]">
                    Equipos
                </a>

                <a href="{{ route('home') }}" class="hover:text-[#e4e2dd]">
                    Ver web
                </a>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto p-8">
        @yield('content')
    </main>

</body>

</html>