<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\VentaController;
use App\Http\Controllers\Api\DetalleVentaController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas CRUD de productos
Route::apiResource('productos', ProductoController::class);

Route::apiResource('ventas', VentaController::class);
// Rutas CRUD de detalles de ventas
Route::apiResource('detalles-ventas', DetalleVentaController::class);