<?php

use App\Http\Controllers\ActuadorController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('parametros', ParametrosController::class);
Route::resource('dispositivos', DispositivoController::class);
Route::resource('sensors', SensorController::class);
Route::resource('actuadors', ActuadorController::class);
