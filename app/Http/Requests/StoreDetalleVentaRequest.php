<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetalleVentaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
{
    return [
        'venta_id' => 'required|integer|exists:ventas,id',
        'producto_id' => 'required|integer|exists:productos,id',
        'cantidad' => 'required|integer|min:1',
    ];
}
}