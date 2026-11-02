<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VentaCollection extends ResourceCollection
{
    public $collects = VentaResource::class;
}