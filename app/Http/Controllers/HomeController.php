<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Trabajo;

class HomeController extends Controller
{

    public function index()
    {
        //Recupera los equipos de la BD junto a su categoria
        $equipos = Equipo::with('categoria')
            ->where('activo', true) //Solo muestra equipo activo
            ->orderBy('nombre')
            ->get();


        //Obtiene los trabajos ordenando primero los destacados
        $trabajos = Trabajo::orderByDesc('destacado')
            ->orderBy('titulo')
            ->get();

        //Envia los equipos y trabajos a la vista principal
        return view('home', compact('equipos', 'trabajos'));
    }
}
