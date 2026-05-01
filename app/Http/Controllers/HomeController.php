<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class HomeController extends Controller
{
    /**
     * Recupera los equipos de la BD junto a su categoria
     */
    public function index()
    {
        $equipos = Equipo::with('categoria')
            ->where('activo', true) //Solo muestra equipo activo
            ->orderBy('nombre')
            ->get();

        return view('home', compact('equipos'));
    }
}
