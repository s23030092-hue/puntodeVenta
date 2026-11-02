<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetalleVenta;
use App\Http\Requests\StoreDetalleVentaRequest;
use App\Http\Requests\UpdateDetalleVentaRequest;
use App\Http\Resources\DetalleVentaResource;
use App\Http\Resources\DetalleVentaCollection;

class DetalleVentaController extends Controller
{
    // CONSULTAR TODOS LOS DETALLES
    public function index()
    {
        $detalles = DetalleVenta::all();

        return new DetalleVentaCollection($detalles);
    }

    // CONSULTAR UN DETALLE
    public function show($id)
    {
        $detalle = DetalleVenta::findOrFail($id);

        return new DetalleVentaResource($detalle);
    }

    // REGISTRAR UN DETALLE
    public function store(StoreDetalleVentaRequest $request)
{
    $detalle = DetalleVenta::create($request->validated());

    return response()->json([
        'mensaje' => 'Detalle de venta registrado correctamente',
        'detalle' => new DetalleVentaResource($detalle)
    ], 201);
}

    // ACTUALIZAR UN DETALLE
    public function update(UpdateDetalleVentaRequest $request, $id)
    {
        $detalle = DetalleVenta::findOrFail($id);

        $detalle->update($request->validated());

        return response()->json([
            'mensaje' => 'Detalle de venta actualizado correctamente',
            'detalle' => new DetalleVentaResource($detalle)
        ], 200);
    }

    // ELIMINAR UN DETALLE
    public function destroy($id)
    {
        $detalle = DetalleVenta::findOrFail($id);

        $detalle->delete();

        return response()->json([
            'mensaje' => 'Detalle de venta eliminado correctamente'
        ], 200);
    }
}