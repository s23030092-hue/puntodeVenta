<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'cantidad' => $this->cantidad,
            'fecha_creacion' => $this->created_at,
            'fecha_actualizacion' => $this->updated_at,
        ];
    }
}