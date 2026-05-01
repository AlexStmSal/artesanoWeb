<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Ruta principal
Route::get('/', function () {
    return view('home');
})->name('home');
