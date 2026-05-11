<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MensajeContacto;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    /**
     * Guarda los datos enviados por el formulario
     */
    public function store(Request $request)
    {
        //Validación completa del formulario
        $validator = Validator::make(
            $request->all(),
            [
                //Nombre obligatorio, debe tener formato texto
                //Acepta letras, espacios, acentos, apóstrofes o guiones
                'nombre' => [
                    'required',
                    'string',
                    'max:100',
                    'regex:/^[\pL\s\'-]+$/u',
                ],

                //Email obligatorio, formato correo válido y sin superar longitud máx
                'email' => [
                    'required',
                    'email',
                    'max:150',
                ],

                //Asunto obligatorio, formato texto y sin superar longitud máx
                'asunto' => [
                    'required',
                    'string',
                    'max:150',
                ],

                //Mensaje obligatorio, formato texto y longitud mínima
                'mensaje' => [
                    'required',
                    'string',
                    'min:10',
                ],
            ],
            [
                //Mensajes personalizados en caso de que algún campo falle
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.max' => 'El nombre no puede superar los 100 caracteres.',
                'nombre.regex' => 'El nombre solo puede contener letras, espacios, acentos, apóstrofes o guiones.',

                'email.required' => 'El correo electrónico es obligatorio.',
                'email.email' => 'Introduce un correo electrónico válido.',
                'email.max' => 'El correo electrónico no puede superar los 150 caracteres.',

                'asunto.required' => 'El asunto es obligatorio.',
                'asunto.max' => 'El asunto no puede superar los 150 caracteres.',

                'mensaje.required' => 'El mensaje es obligatorio.',
                'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
            ]
        );

        //Si la validación falla, vuelve a la sección de contacto
        //con errores y conserva los datos introducidos
        if ($validator->fails()) {
            return redirect('/#contacto')
                ->withErrors($validator)
                ->withInput();
        }

        //Guardar mensaje en la bd
        MensajeContacto::create($validator->validated());

        //Redirige a contacto con mensaje de exito
        return redirect('/#contacto')
            ->with('success', 'Mensaje enviado correctamente.');
    }
}
