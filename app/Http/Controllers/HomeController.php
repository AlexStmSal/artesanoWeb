<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Trabajo;
use App\Models\Categoria;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        //Obtener las categorías para mostrarlas en el filtro público
        $categorias = Categoria::orderBy('nombre')->get();

        //Recupera los equipos activos de la BD junto a su categoría
        $queryEquipos = Equipo::with('categoria')
            ->where('activo', true);

        //Filtro por texto: busca por nombre, marca o modelo.
        if ($request->filled('buscar_equipo')) {

            $queryEquipos->where(function ($consulta) use ($request) {

                $consulta->where('nombre', 'like', '%' . $request->buscar_equipo . '%')
                    ->orWhere('marca', 'like', '%' . $request->buscar_equipo . '%')
                    ->orWhere('modelo', 'like', '%' . $request->buscar_equipo . '%');
            });
        }

        //Filtro por categoría
        if ($request->filled('categoria_id')) {
            $queryEquipos->where('categoria_id', $request->categoria_id);
        }

        $equipos = $queryEquipos
            ->orderBy('nombre')
            ->get();

        //Obtener los trabajos, primero los destacado
        $trabajos = Trabajo::orderByDesc('destacado')
            ->orderBy('titulo')
            ->get();

        //Redirigir con datos a la vista principal
        return view('home', compact('equipos', 'trabajos', 'categorias'));
    }
}
