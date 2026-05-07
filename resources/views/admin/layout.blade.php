<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Admin - Artesano Studio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[var(--principal)] text-white min-h-screen">
    <header class="bg-white/10 border-b border-white/20">
        <!-- NAV -->
        <nav class="max-w-7xl mx-auto px-8 py-5 flex items-center justify-between">
            <a href="{{ route('admin.equipos.index') }}" class="uppercase tracking-widest font-bold">
                Admin Artesano
            </a>

            <div class="flex gap-6 uppercase text-sm tracking-widest">
                <!-- Hacia equipos -->
                <a href="{{ route('admin.equipos.index') }}" class="hover:text-[var(--secundario)]">
                    Equipos
                </a>
                <!-- Hacia trabajos -->
                <a href="{{ route('admin.trabajos.index') }}" class="hover:text-[var(--secundario)]">
                    Trabajos
                </a>
                <!-- Hacia web -->
                <a href="{{ route('home') }}" class="hover:text-[var(--secundario)]">
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