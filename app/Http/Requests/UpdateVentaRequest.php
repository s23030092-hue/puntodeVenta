<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVentaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario_id' => 'sometimes|required|integer|exists:users,id',
            'fecha_venta' => 'sometimes|required|date',
        ];
    }
}