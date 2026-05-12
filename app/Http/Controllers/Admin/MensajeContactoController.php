<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MensajeContacto;
use Illuminate\Http\Request;

class MensajeContactoController extends Controller
{

    /**
     * Listar mensajes 
     */
    public function index()
    {
        //Obtener mensajes de contacto del más reciente al más antiguo
        $mensajes = MensajeContacto::orderByDesc('created_at')->get();

        //Devuelve a la vista de administración
        return view('admin.mensajes.index', compact('mensajes'));
    }


    /**
     * Elimina un mensaje de la BD
     */
    public function destroy(MensajeContacto $mensaje)
    {
        //Eliminar mensaje
        $mensaje->delete();

        //Redirigir al admin con mensaje de confirmación
        return redirect()
            ->route('admin.mensajes.index')
            ->with('success', 'Mensaje eliminado correctamente.');
    }
}
