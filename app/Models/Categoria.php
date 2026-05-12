<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'slug',
    ];


    //Relación 1:N
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
