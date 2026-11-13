<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de gastos personales</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

<header>
    <h1>Control de gastos personales</h1>
    <p>Total gastado: $0.00</p>
    <p>Gastos pendientes: 3</p>
</header>

<main>
    <section>
         <h2>Listado de gastos</h2>
    <table>
        <thead>
            <tr>
                <th>Concepto</th>
                <th>Categoría</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pizza</td>
                <td>Comida</td>
                <td>$220.00</td>
                <td>2026-11-12</td>
                <td>Pendiente</td>
                <td>
                    <button class="btn btn-success">Marcar como pagado</button>
                </td>
            </tr>
            <tr>
                <td>Camión</td>
                <td>Transporte</td>
                <td>$15.00</td>
                <td>2026-10-31</td>
                <td>Pendiente</td>
                <td>
                    <button class="btn btn-success">Marcar como pagado</button>
                </td>
            </tr>
            <td>Game Pass</td>
            <td>Otros</td>
            <td>$300.00</td>
            <td>2026-10-31</td>
                <td>Pendiente</td>
                <td>
                    <button class="btn btn-success">Marcar como pagado</button>
                </td>
        </tbody>
    </table>