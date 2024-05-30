<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/vehiculos', [VehiculoController::class, "listaVehiculos"]);
Route::post('/vehiculos', [VehiculoController::class, "agregarVehiculo"]);
Route::put('/vehiculos/{id}', [VehiculoController::class, "editarVehiculo"]);
Route::delete('/vehiculos/{id}', [VehiculoController::class, "eliminarVehiculo"]);
