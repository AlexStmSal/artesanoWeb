@extends('admin.layout')

@section('content')

<h1 class="text-4xl uppercase mb-8">Mensajes de contacto</h1>

@if(session('success'))
<div class="mb-6 bg-white text-[var(--principal)] px-4 py-3 rounded">
    {{ session('success') }}
</div>
@endif

<div class="overflow-x-auto bg-white/10 rounded-lg">
    <table class="w-full text-left">
        <thead>
            <tr class="border-b border-white/40 uppercase">
                <th class="p-4">Nombre</th>
                <th class="p-4">Email</th>
                <th class="p-4">Asunto</th>
                <th class="p-4">Mensaje</th>
                <th class="p-4">Fecha</th>
                <th class="p-4">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($mensajes as $mensaje)
            <tr class="border-b border-white/20 align-top">
                <td class="p-4">{{ $mensaje->nombre }}</td>
                <td class="p-4">
                    <a href="mailto:{{ $mensaje->email }}" class="underline">
                        {{ $mensaje->email }}
                    </a>
                </td>
                <td class="p-4">{{ $mensaje->asunto }}</td>
                <td class="p-4 max-w-md">
                    {{ $mensaje->mensaje }}
                </td>
                <td class="p-4">
                    {{ $mensaje->created_at->format('d/m/Y H:i') }}
                </td>
                <td class="p-4">
                    <form action="{{ route('admin.mensajes.destroy', $mensaje) }}" method="POST"
                        onsubmit="return confirm('¿Seguro que quieres eliminar este mensaje?');">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="underline text-red-100">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="p-6 text-center text-[var(--secundario)]">
                    No hay mensajes de contacto registrados.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection