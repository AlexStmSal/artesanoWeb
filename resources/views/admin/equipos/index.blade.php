@extends('admin.layout')

@section('content')

<h1 class="text-4xl uppercase mb-8">Administrar equipos</h1>

<form method="GET" action="{{ route('admin.equipos.index') }}" class="bg-white/20 p-6 rounded-lg mb-8 grid grid-cols-1 md:grid-cols-4 gap-4">

    <!-- Filtro de texto -->
    <input type="text" name="buscar" placeholder="Buscar equipo, marca o modelo"
        value="{{ request('buscar') }}"
        class="px-4 py-2 rounded text-black">

    <!-- Filtro de categoría -->
    <select name="categoria_id" class="px-4 py-2 rounded text-black">
        <option value="">Todas las categorías</option>

        @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}" @selected(request('categoria_id')==$categoria->id)>
            {{ $categoria->nombre }}
        </option>
        @endforeach
    </select>

    <!-- Filtro de estado -->
    <select name="activo" class="px-4 py-2 rounded text-black">
        <option value="">Todos los estados</option>
        <option value="1" @selected(request('activo')==='1' )>Activo</option>
        <option value="0" @selected(request('activo')==='0' )>Inactivo</option>
    </select>

    <button type="submit" class="border border-white py-2 uppercase hover:bg-white hover:text-[#8f896c] transition">
        Filtrar
    </button>
</form>

<!-- Nuevo equipo -->
<div class="mb-6">
    <a href="{{ route('admin.equipos.create') }}" class="inline-block border border-white px-4 py-2 uppercase hover:bg-white hover:text-[#8f896c] transition">
        Añadir equipo
    </a>
</div>

<!-- Equipos -->
<div class="overflow-x-auto bg-white/10 rounded-lg">
    <table class="w-full text-left">
        <thead>
            <tr class="border-b border-white/40 uppercase">
                <th class="p-4">Categoría</th>
                <th class="p-4">Nombre</th>
                <th class="p-4">Marca</th>
                <th class="p-4">Modelo</th>
                <th class="p-4">Cantidad</th>
                <th class="p-4">Estado</th>
                <th class="p-4">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @forelse($equipos as $equipo)
            <tr class="border-b border-white/20">
                <td class="p-4">{{ $equipo->categoria->nombre ?? 'Sin categoría' }}</td>
                <td class="p-4">{{ $equipo->nombre }}</td>
                <td class="p-4">{{ $equipo->marca }}</td>
                <td class="p-4">{{ $equipo->modelo }}</td>
                <td class="p-4">{{ $equipo->cantidad }}</td>
                <td class="p-4">
                    {{ $equipo->activo ? 'Activo' : 'Inactivo' }}
                </td>
                <!-- Btn Acciones -->
                <td class="p-4">
                    <a href="{{ route('admin.equipos.edit', $equipo) }}" class="underline">
                        Editar
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="p-6 text-center text-[#e4e2dd]">
                    No hay equipos que coincidan con los filtros.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection