<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class HomeController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with('categoria')
            ->where('activo', true)
            ->orderBy('nombre')
            ->get();

        return view('home', compact('equipos'));
    }
}
