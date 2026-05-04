<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;

//Ruta principal
Route::get('/', function () {
    return view('home');
})->name('home');


//Controladores
Route::get('/', [HomeController::class, 'index'])->name('home');

//Mensaje contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
