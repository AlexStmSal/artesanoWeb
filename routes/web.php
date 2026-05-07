<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Admin\EquipoController;
use App\Http\Controllers\Admin\TrabajoController;

//Ruta principal
Route::get('/', function () {
    return view('home');
})->name('home');


//Controladores
Route::get('/', [HomeController::class, 'index'])->name('home');

//Mensaje contacto
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

//Panel de administración
Route::prefix('admin')->name('admin.')->group(function () {
    //Admin de Equipo
    Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
    Route::get('/equipos/crear', [EquipoController::class, 'create'])->name('equipos.create');
    Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/{equipo}/editar', [EquipoController::class, 'edit'])->name('equipos.edit');
    Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

    //Admin de Trabajos
    Route::get('/trabajos', [TrabajoController::class, 'index'])->name('trabajos.index');
    Route::get('/trabajos/crear', [TrabajoController::class, 'create'])->name('trabajos.create');
    Route::post('/trabajos', [TrabajoController::class, 'store'])->name('trabajos.store');
    Route::get('/trabajos/{trabajo}/editar', [TrabajoController::class, 'edit'])->name('trabajos.edit');
    Route::put('/trabajos/{trabajo}', [TrabajoController::class, 'update'])->name('trabajos.update');
    Route::delete('/trabajos/{trabajo}', [TrabajoController::class, 'destroy'])->name('trabajos.destroy');
});
