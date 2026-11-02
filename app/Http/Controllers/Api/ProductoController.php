<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Resources\ProductoResource;
use App\Http\Resources\ProductoCollection;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // CONSULTAR TODOS LOS PRODUCTOS
    public function index()
    {
        $productos = Producto::all();

        return new ProductoCollection($productos);
    }

    // CONSULTAR UN PRODUCTO
    public function show($id)
    {
        $producto = Producto::findOrFail($id);

        return new ProductoResource($producto);
    }

    // REGISTRAR UN PRODUCTO
    public function store(StoreProductoRequest $request)
    {
        $producto = Producto::create($request->validated());

        return response()->json([
            'mensaje' => 'Producto registrado correctamente',
            'producto' => new ProductoResource($producto)
        ], 201);
    }

    // ACTUALIZAR UN PRODUCTO
    public function update(UpdateProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update($request->validated());

        return response()->json([
            'mensaje' => 'Producto actualizado correctamente',
            'producto' => new ProductoResource($producto)
        ], 200);
    }

    // ELIMINAR UN PRODUCTO
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return response()->json([
            'mensaje' => 'Producto eliminado correctamente'
        ], 200);
    }
}