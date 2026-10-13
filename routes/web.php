<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\AlquileresController;
use App\Http\Controllers\DetalleAlquileresController;

Route::get('/categorias/equipos', [CategoriasController::class, 'equipos']);
Route::get('/clientes/alquileres', [ClientesController::class, 'alquileres']);
Route::get('/empleados/alquileres', [EmpleadosController::class, 'alquileres']);
Route::get('/equipos/categoria', [EquiposController::class, 'categoria']);
Route::get('/alquileres/relaciones', [AlquileresController::class, 'relaciones']);
Route::get('/detalles-alquiler/relaciones', [DetalleAlquileresController::class, 'relaciones']);
