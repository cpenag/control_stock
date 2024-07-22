<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'registro'])->name('login.registro');
Route::post('/recibe', [LoginController::class, 'formulario'])->name('recibe.formulario');
Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');
