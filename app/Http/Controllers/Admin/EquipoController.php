<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
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
    public function create() {}

    /**
     * Guardar equipo nuevo
     */
    public function store() {}

    /**
     * Mostrar formulario de edición
     */
    public function edit() {}

    /**
     * ACtualizar equipo
     */
    public function update() {}

    /**
     * Eliminar equipo
     */
    public function destroy() {}
}
