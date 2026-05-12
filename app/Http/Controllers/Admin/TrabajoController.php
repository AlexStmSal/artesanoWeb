<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Trabajo;

class TrabajoController extends Controller
{
    /**
     * Listar trabajos
     */
    public function index()
    {
        //Obtener trabajos ordenados por 'destacado'
        $trabajos = Trabajo::orderByDesc('destacado')
            ->orderBy('titulo')
            ->get();

        //Devuelve la vista de administración
        return view('admin.trabajos.index', compact('trabajos'));
    }

    /**
     * Mostrar formulario para crear trabajos
     */
    public function create()
    {
        return view('admin.trabajos.create');
    }

    /**
     * Guardar trabajos nuevos
     */
    public function store(Request $request)
    {
        //Validar datos del form
        $datos = $request->validate([
            'titulo' => 'required|string|max:150',
            'url_video' => 'required|url|max:255',
            'descripcion' => 'nullable|string',
            'destacado' => 'nullable|boolean',
        ]);

        //Generar automaticamente el slug a partir del video
        $datos['slug'] = Str::slug($datos['titulo']);

        //El checkbox solo se envía si est marcado
        //Si llega en el request, trabajo destacado, si no, no destacado
        $datos['destacado'] = $request->has('destacado');

        //Crear trabajo en BD
        Trabajo::create($datos);

        //Redirigir a admin con mensaje de confirmación
        return redirect()
            ->route('admin.trabajos.index')
            ->with('success', 'Trabajo añadido correctamente.');
    }

    /**
     * Mostrar form de edición con el trabajo seleccionado
     */
    public function edit(Trabajo $trabajo)
    {
        return view('admin.trabajos.edit', compact('trabajo'));
    }

    /**
     * Guardar los cambios en la BD
     */
    public function update(Request $request, Trabajo $trabajo)
    {
        //Validar datos
        $datos = $request->validate([
            'titulo' => 'required|string|max:150',
            'url_video' => 'required|url|max:255',
            'descripcion' => 'nullable|string',
            'destacado' => 'nullable|boolean',
        ]);

        //Actualizar slug en caso de ser necesario
        $datos['slug'] = Str::slug($datos['titulo']);

        //El checkbox solo llega si está marcado
        //Si no llega, trabajo no destacado
        $datos['destacado'] = $request->has('destacado');

        //Actualizar datos
        $trabajo->update($datos);

        //Redirigir con mensaje de confirmación
        return redirect()
            ->route('admin.trabajos.index')
            ->with('success', 'Trabajo actualizado correctamente.');
    }


    /**
     * Eliminar el trabajo de la BD
     */
    public function destroy(Trabajo $trabajo)
    {
        //Eliminar trabajo
        $trabajo->delete();

        //Redirigir con mensaje de confirmación
        return redirect()
            ->route('admin.trabajos.index')
            ->with('success', 'Trabajo eliminado correctamente.');
    }
}
