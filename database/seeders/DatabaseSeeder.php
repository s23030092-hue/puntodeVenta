<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario administrador
        $administrador = User::create([
            'name' => 'Administrador',
            'nombre_usuario' => 'admin',
            'email' => 'admin@puntodeventa.com',
            'rol' => 'administrador',
            'password' => Hash::make('password123'),
        ]);

        // Crear un usuario cajero
        $cajero = User::create([
            'name' => 'Cajero de Prueba',
            'nombre_usuario' => 'cajero',
            'email' => 'cajero@puntodeventa.com',
            'rol' => 'cajero',
            'password' => Hash::make('password123'),
        ]);

        // Crear 10 productos
        Producto::factory(10)->create();

        // Obtener los productos existentes
        $productos = Producto::all();

        // Crear 5 ventas asociadas a usuarios existentes
        for ($i = 0; $i < 5; $i++) {
            $usuario = $i % 2 === 0 ? $cajero : $administrador;

            $venta = Venta::create([
                'usuario_id' => $usuario->id,
                'fecha_venta' => now()->subDays($i),
            ]);

            // Cada venta tendrá entre 1 y 3 detalles
            $cantidadDetalles = rand(1, 3);

            for ($j = 0; $j < $cantidadDetalles; $j++) {
                $producto = $productos->random();

                DetalleVenta::create([
                    'venta_id' => $venta->id,
                    'producto_id' => $producto->id,
                    'cantidad' => rand(1, 5),
                ]);
            }
        }
    }
}
