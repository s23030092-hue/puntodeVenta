<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de ventas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f4f4;
        }

        h1 {
            text-align: center;
        }

        .venta {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e5e5e5;
        }
    </style>
</head>
<body>

    <h1>Reporte de ventas</h1>

    @forelse ($ventas as $venta)

        <div class="venta">

            <h2>Venta #{{ $venta->id }}</h2>

            <p>
                <strong>Usuario:</strong>
                {{ $venta->usuario->name ?? 'Sin usuario' }}
            </p>

            <p>
                <strong>Fecha:</strong>
                {{ $venta->fecha_venta }}
            </p>

            <h3>Productos vendidos</h3>

            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Código</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($venta->detalles as $detalle)
                        <tr>
                            <td>{{ $detalle->producto->nombre ?? 'Sin producto' }}</td>
                            <td>{{ $detalle->producto->codigo ?? 'N/A' }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Sin productos registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    @empty
        <p>No hay ventas registradas.</p>
    @endforelse

</body>
</html>