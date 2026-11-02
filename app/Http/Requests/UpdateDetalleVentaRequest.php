<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDetalleVentaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'venta_id' => 'sometimes|required|integer|exists:ventas,id',
            'producto_id' => 'sometimes|required|integer|exists:productos,id',
            'cantidad' => 'sometimes|required|integer|min:1',
        ];
    }
}