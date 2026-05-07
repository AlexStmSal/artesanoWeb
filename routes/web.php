<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Admin\EquipoController;

//Ruta principal
Route::get('/', function () {
    return view('home');
})->name('home');


//Controladores
Route::get('/', [HomeController::class, 'index'])->name('home');

//Mensaje contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

//Admin de equipo
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
    Route::get('/equipos/crear', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/{equipo}/editar', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');
});
