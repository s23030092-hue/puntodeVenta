<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DetalleVentaCollection extends ResourceCollection
{
    public $collects = DetalleVentaResource::class;
}