@extends('admin.layout')

@section('content')

<h1 class="text-4xl uppercase mb-8">Añadir equipo</h1>

<a href="{{ route('admin.equipos.index') }}" class="inline-block mb-6 underline">
    Volver al listado
</a>

@if($errors->any())
<div class="mb-6 bg-red-100 text-red-700 px-4 py-3 rounded">
    Revisa los campos del formulario.
</div>
@endif

<form action="{{ route('admin.equipos.store') }}" method="POST" class="bg-white/20 p-8 rounded-lg max-w-xl mx-auto">
    @csrf

    <!-- CATEGORIA -->
    <div class="mb-4">
        <label for="categoria_id" class="block mb-2 uppercase text-sm">Categoría</label>

        <select name="categoria_id" id="categoria_id"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white focus:outline-none focus:border-white">
            <option value="" class="text-black">Selecciona una categoría</option>

            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                class="text-black"
                @selected(old('categoria_id')==$categoria->id)>
                {{ $categoria->nombre }}
            </option>
            @endforeach
        </select>

        @error('categoria_id')

        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror

    </div>

    <!-- NOMBRE -->
    <div class="mb-4">
        <label for="nombre" class="block mb-2 uppercase text-sm">Nombre</label>

        <input type="text" name="nombre" id="nombre"
            value="{{ old('nombre') }}"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('nombre')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror

    </div>

    <!-- MARCA -->
    <div class="mb-4">
        <label for="marca" class="block mb-2 uppercase text-sm">Marca</label>

        <input type="text" name="marca" id="marca"
            value="{{ old('marca') }}"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('marca')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>

        @enderror

    </div>


    <!-- MODELO -->
    <div class="mb-4">
        <label for="modelo" class="block mb-2 uppercase text-sm">Modelo</label>

        <input type="text" name="modelo" id="modelo"
            value="{{ old('modelo') }}"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('modelo')

        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror

    </div>

    <!-- CANTIDAD -->
    <div class="mb-4">
        <label for="cantidad" class="block mb-2 uppercase text-sm">Cantidad</label>

        <input type="number" name="cantidad" id="cantidad"
            value="{{ old('cantidad', 1) }}"
            min="1"
            class="w-full px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">

        @error('cantidad')

        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>

        @enderror
    </div>

    <!-- DESCRIPCIÓN -->
    <div class="mb-6">
        <label for="descripcion" class="block mb-2 uppercase text-sm">Descripción</label>

        <textarea name="descripcion" id="descripcion"
            class="w-full min-h-32 px-4 py-2 rounded border border-white/60 bg-transparent text-white placeholder-white/60 focus:outline-none focus:border-white">{{ old('descripcion') }}</textarea>

        @error('descripcion')
        <p class="text-sm text-red-100 mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- ACCIÓN -->
    <div class="mb-6">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="activo" value="1" checked>

            <span>Mostrar equipo en la web</span>

        </label>
    </div>

    <button type="submit" class="border border-white px-6 py-3 uppercase hover:bg-white hover:text-[var(--principal)] transition">
        Guardar equipo
    </button>
</form>

@endsection