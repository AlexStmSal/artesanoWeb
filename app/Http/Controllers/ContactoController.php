<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MensajeContacto;

class ContactoController extends Controller
{
    /**
     * Guarda los datos enviados por el formulario
     */
    public function store(Request $request)
    {
        //Validar datos desde el formulario
        $datos = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'asunto' => 'required|string|max:150',
            'mensaje' => 'required|string',
        ]);

        //Guardar mensaje en la bd
        MensajeContacto::create($datos);

        //Redirige a contacto con mensaje de exito
        return redirect('/#contacto')
            ->with('success', 'Mensaje enviado correctamente.');
    }
}
