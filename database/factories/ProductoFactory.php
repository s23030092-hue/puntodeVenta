<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'codigo' => $this->faker->unique()->bothify('PROD-####'),

            'nombre' => $this->faker->randomElement([
                'Arroz',
                'Frijol',
                'Azucar',
                'Leche',
                'Aceite',
                'Galletas',
                'Cafe',
                'Pasta',
                'Jabon',
                'Detergente',
            ]),

            'cantidad' => $this->faker->numberBetween(0, 150),
        ];
    }
}
