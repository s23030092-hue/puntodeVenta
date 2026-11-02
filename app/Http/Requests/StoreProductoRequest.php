<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo' => 'required|string|max:255|unique:productos,codigo',
            'nombre' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
        ];
    }
}