<?php

namespace App\Http\Controllers;

use App\Models\Venta;

class ConsultaEloquentController extends Controller
{
    public function index()
    {
        $ventas = Venta::with([
            'usuario',
            'detalles.producto'
        ])->get();

        return view('reportes.ventas', compact('ventas'));
    }
}