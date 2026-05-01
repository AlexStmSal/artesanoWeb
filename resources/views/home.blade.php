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

        <section id="inicio" class="min-h-screen pt-28 px-6 flex items-center">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="bg-[#e4e2dd] h-[500px] rounded-lg"></div>

                <div>
                    <h1 class="text-5xl md:text-7xl uppercase mb-8">
                        Where silence speaks,<br>Artesano thinks
                    </h1>

                    <p class="max-w-md leading-relaxed text-[#e4e2dd]">
                        Artesano Studio es un estudio creativo que trabaja desde la observación y el detalle.
                    </p>
                </div>
            </div>
        </section>

        <section id="trabajos" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl uppercase mb-10">Trabajos</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-[#e4e2dd] text-black h-52 rounded-lg flex items-center justify-center">Video</div>
                    <div class="bg-[#e4e2dd] text-black h-52 rounded-lg flex items-center justify-center">Video</div>
                    <div class="bg-[#e4e2dd] text-black h-52 rounded-lg flex items-center justify-center">Video</div>
                </div>
            </div>
        </section>

        <section id="servicios" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl uppercase mb-10">Servicios</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Filmmaking</h3>
                        <p class="text-[#e4e2dd]">Producción audiovisual y creación de contenido visual.</p>
                    </article>

                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Fotografía</h3>
                        <p class="text-[#e4e2dd]">Trabajo visual centrado en composición, detalle e identidad.</p>
                    </article>

                    <article class="bg-white/20 p-8 rounded-lg">
                        <h3 class="uppercase text-xl mb-4">Web Design</h3>
                        <p class="text-[#e4e2dd]">Diseño y desarrollo de experiencias web creativas.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="estudio" class="min-h-screen pt-28 px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl uppercase mb-8">El estudio</h2>
                    <p class="text-[#e4e2dd] leading-relaxed">
                        Espacio de trabajo donde se desarrollan proyectos audiovisuales, musicales y digitales.
                    </p>
                </div>

                <div class="bg-[#e4e2dd] h-[400px] rounded-lg"></div>
            </div>
        </section>

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

                        <tbody>
                            <tr class="border-b border-white/20">
                                <td class="py-3">Mic</td>
                                <td class="py-3">C214</td>
                                <td class="py-3">AKG</td>
                                <td class="py-3">1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="contacto" class="min-h-screen pt-28 px-6 flex items-center">
            <div class="max-w-7xl mx-auto w-full">
                <h2 class="text-4xl uppercase mb-10">Contacto</h2>

                <form action="#" method="POST" class="max-w-md mx-auto bg-white/20 p-8 rounded-lg">
                    @csrf

                    <input type="text" name="nombre" placeholder="Nombre y apellidos"
                        class="w-full mb-4 bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">

                    <input type="email" name="email" placeholder="Correo electrónico"
                        class="w-full mb-4 bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">

                    <input type="text" name="asunto" placeholder="Asunto"
                        class="w-full mb-4 bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none">

                    <textarea name="mensaje" placeholder="Mensaje"
                        class="w-full mb-6 bg-transparent border-b border-white py-2 placeholder-white/70 focus:outline-none"></textarea>

                    <button type="submit" class="w-full border border-white py-3 uppercase hover:bg-white hover:text-[#8f896c] transition">
                        Enviar
                    </button>
                </form>
            </div>
        </section>

    </main>

</body>

</html>