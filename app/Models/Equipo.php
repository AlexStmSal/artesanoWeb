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

    //Relación N:1 (Cada equipo pertenece a una categoria)
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
