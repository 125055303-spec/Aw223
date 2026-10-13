<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona Administración</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

<header>
    <h1>Zona Administracion</h1>
    <p>Mensajes Recibidos</p>
</header>

<nav>
    <a href="index.html"><i class="bi bi-house"></i></a>
</nav>

<main>
<section>
    <h2>Mensajes Recibidos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ana</td>
                <td>ana@example.com</td>
                <td>Hola, me interesa tu portafolio.</td>
                <td>
                    <a href="editar.php?id=1"><i class="bi bi-pencil-square"></i></a>
                    <a href="borrar.php?id=1"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>José</td>
                <td>jose@example.com</td>
                <td>Quisiera más información sobre tus proyectos.</td>
                <td>
                    <a href="editar.php?id=2"><i class="bi bi-pencil-square"></i></a>
                    <a href="borrar.php?id=2"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</section>
</main>

<footer>
    <p>2026 Mi portafolio web</p>
    <p>Practica de Programación Web todos los derechos reservados</p>
</footer>

</body>
</html>