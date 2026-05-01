<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    protected $fillable = [
        'categoria_id',
        'nombre',
        'marca',
        'modelo',
        'cantidad',
        'descripcion',
        'activo',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
