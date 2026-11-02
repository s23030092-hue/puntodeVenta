<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VentaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'usuario_id' => $this->usuario_id,
            'fecha_venta' => $this->fecha_venta,
            'fecha_creacion' => $this->created_at,
            'fecha_actualizacion' => $this->updated_at,
        ];
    }
}