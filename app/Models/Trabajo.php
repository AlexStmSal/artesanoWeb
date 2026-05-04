<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'url_video',
        'destacado',
    ];
}
