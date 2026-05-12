<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Equipo;

class EquipoController extends Controller
{
    /**
     * Listar equipo
     */
    public function index(Request $request)
    {
        //Obtener todas las categorías para mostrarlas en el filtro
        $categorias = Categoria::orderBy('nombre')->get();

        //Consulta equipo con su categoría asociada
        $query = Equipo::with('categoria');

        //Filtro de texto (buscar por nombre, marca o modelo)
        if ($request->filled('buscar')) {

            $query->where(function ($consulta) use ($request) {
                $consulta->where('nombre', 'like', '%' . $request->buscar . '%')
                    ->orWhere('marca', 'like', '%' . $request->buscar . '%')
                    ->orWhere('modelo', 'like', '%' . $request->buscar . '%');
            });
        }

        //Filtro de categoría
        if ($request->filled('categoria_id')) {
            $query->where('categoria_id', $request->categoria_id);
        }

        //Filtro de estado (activo o inactivo)
        if ($request->filled('activo')) {
            $query->where('activo', $request->activo);
        }

        //Consulta final ordenando por nombre
        $equipos = $query->orderBy('nombre')->get();

        //Enviar los equipos a la vista del panel de admin
        return view('admin.equipos.index', compact('equipos', 'categorias'));
    }

    /**
     * Formulario de creación de equipo
     */
    public function create()
    {
        //Obtener categorias 
        $categorias = Categoria::orderBy('nombre')->get();

        //Mostrar form de creación de equipos
        return view('admin.equipos.create', compact('categorias'));
    }

    /**
     * Guardar equipo nuevo
     */
    public function store(Request $request)
    {

        //Validar datos enviados desde el formulario
        $datos = $request->validate([

            'categoria_id' => 'required|exists:categorias,id',
            'nombre' => 'required|string|max:150',
            'marca' => 'required|string|max:100',
            'modelo' => 'nullable|string|max:100',
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
            'activo' => 'nullable|boolean',
        ]);

        //Si el checkbox no se marca, no llega en el request
        //Si llega el request, equipo activo, si no llega, inactivo
        $datos['activo'] = $request->has('activo');

        //Crear nuevo equipo
        Equipo::create($datos);

        //Redirigir a panel de equipos con mensaje de confirmación
        return redirect()
            ->route('admin.equipos.index')
            ->with('success', 'Equipo añadido correctamente.');
    }

    /**
     * Mostrar formulario de edición
     */
    public function edit(Equipo $equipo)
    {

        //Obtener categorías para mostrar en el formulario
        $categorias = Categoria::orderBy('nombre')->get();

        //Mostrar formulario con el equipo seleccionado
        return view('admin.equipos.edit', compact('equipo', 'categorias'));
    }

    /**
     * Guardar los cambios en la BD
     */
    public function update(Request $request, Equipo $equipo)
    {
        //Validar datos desde el form de edición
        $datos = $request->validate([
            'categoria_id' => 'required|exists:categorias,id',
            'nombre' => 'required|string|max:150',
            'marca' => 'required|string|max:100',
            'modelo' => 'nullable|string|max:100',
            'cantidad' => 'required|integer|min:1',
            'descripcion' => 'nullable|string',
            'activo' => 'nullable|boolean',
        ]);

        //El checkbox solo llega si está marcado
        //Si no llega, equipo inactivo
        $datos['activo'] = $request->has('activo');

        //Actualizar datos
        $equipo->update($datos);

        //Redirección con confirmación
        return redirect()
            ->route('admin.equipos.index')
            ->with('success', 'Equipo actualizado correctamente.');
    }

    /**
     * Eliminar equipo
     */
    public function destroy(Equipo $equipo)
    {
        //Eliminar equipo
        $equipo->delete();

        //Redirigir con mensaje de confirmación
        return redirect()
            ->route('admin.equipos.index')
            ->with('success', 'Equipo eliminado correctamente.');
    }
}
