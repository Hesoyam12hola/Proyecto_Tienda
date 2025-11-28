<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\ProductoController;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta del panel
Route::get('/panel', function () {
    return view('panel');
})->name('panel');

// Ruta del login
Route::get('/login', function () {
    return view('layouts.auth.login');
})->name('login');

// Rutas de TipoProducto y Producto
Route::resource('tipoproducto', TipoProductoController::class);
Route::resource('producto', ProductoController::class);
