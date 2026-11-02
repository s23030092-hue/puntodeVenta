<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Http\Resources\VentaResource;
use App\Http\Resources\VentaCollection;

class VentaController extends Controller
{
    // CONSULTAR TODAS LAS VENTAS
    public function index()
    {
        $ventas = Venta::all();

        return new VentaCollection($ventas);
    }

    // CONSULTAR UNA VENTA
    public function show($id)
    {
        $venta = Venta::findOrFail($id);

        return new VentaResource($venta);
    }

    // REGISTRAR UNA VENTA
    public function store(StoreVentaRequest $request)
    {
        $venta = Venta::create($request->validated());

        return response()->json([
            'mensaje' => 'Venta registrada correctamente',
            'venta' => new VentaResource($venta)
        ], 201);
    }

    // ACTUALIZAR UNA VENTA
    public function update(UpdateVentaRequest $request, $venta)
    {
        $venta = Venta::findOrFail($venta);

        $venta->update($request->validated());

        return response()->json([
            'mensaje' => 'Venta actualizada correctamente',
            'venta' => new VentaResource($venta)
        ], 200);
    }

    // ELIMINAR UNA VENTA
    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);

        $venta->delete();

        return response()->json([
            'mensaje' => 'Venta eliminada correctamente'
        ], 200);
    }
}