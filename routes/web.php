<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'role:admin'])->name('home');

Route::resource('departments', DepartmentController::class)->middleware(['auth', 'role:admin']);

Route::resource('brands', BrandController::class)->middleware(['auth', 'role:admin']);

Route::resource('patients', PatientController::class)->middleware(['auth', 'role:admin']);


