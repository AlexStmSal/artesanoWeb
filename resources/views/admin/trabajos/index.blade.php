@extends('admin.layout')

@section('content')

<h1 class="text-4xl uppercase mb-8">Trabajos</h1>

<!-- MEnsajes de éxito -->
@if(session('success'))
<div class="mb-6 bg-white text-[var(--principal)] px-4 py-3 rounded">
    {{ session('success') }}
</div>
@endif

<div class="mb-6">
    <a href="{{ route('admin.trabajos.create') }}" class="inline-block border border-white px-4 py-2 uppercase hover:bg-white hover:text-[var(--principal)] transition">
        Añadir trabajo
    </a>
</div>

<!-- Contenedor tabla trabajos -->
<div class="overflow-x-auto bg-white/10 rounded-lg">

    <table class="w-full text-left">
        <thead>
            <tr class="border-b border-white/40 uppercase">
                <th class="p-4">Título</th>
                <th class="p-4">Descripción</th>
                <th class="p-4">Vídeo</th>
                <th class="p-4">Destacado</th>
                <th class="p-4">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <!-- Si la lista de trabajos esta vacía, muestra mensaje  -->
            @forelse($trabajos as $trabajo)
            <tr class="border-b border-white/20">
                <td class="p-4">{{ $trabajo->titulo }}</td>

                <td class="p-4">{{ $trabajo->descripcion ?? 'Sin descripción' }}</td>

                <td class="p-4">
                    <a href="{{ $trabajo->url_video }}" target="_blank" class="underline">
                        Ver vídeo
                    </a>
                </td>

                <td class="p-4">
                    {{ $trabajo->destacado ? 'Sí' : 'No' }}
                </td>

                <td class="p-4">
                    <div class="flex gap-4">
                        <!-- BTN Editar -->
                        <a href="{{ route('admin.trabajos.edit', $trabajo) }}" class="underline">
                            Editar
                        </a>

                        <!-- BTN Eliminar -->
                        <form action="{{ route('admin.trabajos.destroy', $trabajo) }}" method="POST"
                            onsubmit="return confirm('¿Seguro que quieres eliminar este trabajo?');">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="underline text-red-100">
                                Eliminar
                            </button>

                        </form>
                    </div>
                </td>

            </tr>

            @empty

            <tr>
                <td colspan="5" class="p-6 text-center text-[var(--secundario)]">
                    No hay trabajos registrados.
                </td>
            </tr>
            @endforelse
        </tbody>

    </table>
</div>

@endsection