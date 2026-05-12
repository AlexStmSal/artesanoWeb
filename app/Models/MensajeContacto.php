<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MensajeContacto extends Model
{
    //Nombre de la tabla asociada al modelo
    protected $table = 'mensajes_contacto';

    //Campos del formulario
    protected $fillable = [
        'nombre',
        'email',
        'asunto',
        'mensaje',
    ];
}
