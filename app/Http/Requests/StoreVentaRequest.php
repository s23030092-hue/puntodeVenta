<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVentaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario_id' => 'required|integer|exists:users,id',
            'fecha_venta' => 'required|date',
        ];
    }
}