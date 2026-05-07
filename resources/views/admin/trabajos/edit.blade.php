@extends('admin.layout')

@section('content')

<h1 class="text-4xl uppercase mb-8">Editar trabajo</h1>

<a href="{{ route('admin.trabajos.index') }}" class="inline-block mb-6 underline">
    Volver al listado
</a>

<!-- Mensaje error en form -->
@if($errors->any())
<div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded">
    Revisa los campos del formulario.
</div>
@endif

<form action="{{ route('admin.trabajos.update', $trabajo) }}" method="POST" class="bg-white/20 p-8 rounded-lg max-w-xl mx-auto">
    @csrf
    @method('PUT')

    <!-- TÍTULO -->
    <div class="mb-4">
        <label for="titulo" class="block mb-2 uppercase text-sm">Título</label>

        <input type="text" name="titulo" id="titulo"
            value="{{ old('titulo', $trabajo->titulo) }}"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('titulo')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- URL -->
    <div class="mb-4">
        <label for="url_video" class="block mb-2 uppercase text-sm">URL del vídeo</label>

        <input type="url" name="url_video" id="url_video"
            value="{{ old('url_video', $trabajo->url_video) }}"
            placeholder="https://www.youtube.com/embed/..."
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('url_video')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- DESCRIPCION -->
    <div class="mb-6">
        <label for="descripcion" class="block mb-2 uppercase text-sm">Descripción</label>

        <textarea name="descripcion" id="descripcion"
            class="w-full min-h-32 px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">{{ old('descripcion', $trabajo->descripcion) }}</textarea>

        @error('descripcion')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- DESTACADO -->
    <div class="mb-6">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="destacado" value="1"
                @checked(old('destacado', $trabajo->destacado))>
            <span>Marcar como trabajo destacado</span>
        </label>
    </div>

    <button type="submit" class="border border-white px-6 py-3 uppercase hover:bg-white hover:text-[var(--principal)] transition">
        Guardar cambios
    </button>

</form>

@endsection