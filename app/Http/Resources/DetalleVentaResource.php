<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleVentaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'venta_id' => $this->venta_id,
            'producto_id' => $this->producto_id,
            'cantidad' => $this->cantidad,
            'fecha_creacion' => $this->created_at,
            'fecha_actualizacion' => $this->updated_at,
        ];
    }
}