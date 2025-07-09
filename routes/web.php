<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'role:admin'])->name('home');

Route::resource('empleados', EmpleadoController::class);
Route::resource('departamentos', DepartamentoController::class);

// Paginas Conectoras
Route::get('/connectors/catalogo', function () {
    return view('connectors.catalogo.index');
})->middleware(['auth', 'role:admin'])->name('connectors.catalogo.index');