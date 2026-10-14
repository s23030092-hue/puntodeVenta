<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    protected $model = Venta::class;

    public function definition()
    {
        return [
            'usuario_id' => User::factory(),
            'fecha_venta' => $this->faker->dateTimeBetween(
                '-30 days',
                'now'
            ),
        ];
    }
}
