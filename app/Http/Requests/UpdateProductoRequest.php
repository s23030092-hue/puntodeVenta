<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('producto');

        return [
            'codigo' => [
                'sometimes',
                'required',
                'string',
                'max:255',
                Rule::unique('productos', 'codigo')->ignore($id),
            ],
            'nombre' => 'sometimes|required|string|max:255',
            'cantidad' => 'sometimes|required|integer|min:0',
        ];
    }
}