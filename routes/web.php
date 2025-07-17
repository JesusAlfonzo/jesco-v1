<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\CotizacioneController;
use App\Http\Controllers\TipoImpuestoController;
use App\Http\Controllers\SolicitudCompraController;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\ImpuestoCompraController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ExameneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\MuestraController;
use App\Http\Controllers\TasaCambioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'role:admin'])->name('home');

// Rutas de Recursos Crud
Route::resource('empleados', EmpleadoController::class)->middleware(['auth', 'role:admin']);
Route::resource('departamentos', DepartamentoController::class)->middleware(['auth', 'role:admin']);
Route::resource('monedas', MonedaController::class)->middleware(['auth', 'role:admin']);

// Rutas de Recursos de Compras
Route::resource('impuesto-compras', ImpuestoCompraController::class)->middleware(['auth', 'role:admin']);
Route::resource('proveedores', ProveedoreController::class)->middleware(['auth', 'role:admin']);
Route::resource('solicitud-compras', SolicitudCompraController::class)->middleware(['auth', 'role:admin']);
Route::resource('tipo-impuestos', TipoImpuestoController::class)->middleware(['auth', 'role:admin']);
Route::resource('cotizaciones', CotizacioneController::class)->middleware(['auth', 'role:admin']);
Route::resource('orden-compras', OrdenCompraController::class)->middleware(['auth', 'role:admin']);
Route::resource('areas', AreaController::class)->middleware(['auth', 'role:admin']);

Route::resource('metodo-pagos', MetodoPagoController::class)->middleware(['auth', 'role:admin']);
Route::resource('tasa-cambios', TasaCambioController::class)->middleware(['auth', 'role:admin']);

Route::resource('examenes', ExameneController::class)->middleware(['auth', 'role:admin']);
Route::resource('muestras', MuestraController::class)->middleware(['auth', 'role:admin']);


// Paginas Conectoras
Route::get('/connectors/Ajuste-Modulos', function () {
    return view('connectors.Ajuste-Modulos.index');
})->middleware(['auth', 'role:admin'])->name('connectors.Ajuste-Modulos.index');

Route::get('/connectors/compras', function () {
    return view('connectors.compras.index');
})->middleware(['auth', 'role:admin'])->name('connectors.compras.index');

Route::get('/connectors/Administrativo', function () {
        return view('connectors.Administrativo.index');
})->middleware(['auth', 'role:admin'])->name('connectors.Administrativo.index');

Route::get('/connectors/Almacen', function () {
    return view('connectors.Almacen.index');
})->middleware(['auth', 'role:admin'])->name('connectors.Almacen.index');

Route::get('/connectors/Laboratorio', function () {
    return view('connectors.Laboratorio.index');
})->middleware(['auth', 'role:admin'])->name('connectors.Laboratorio.index');
