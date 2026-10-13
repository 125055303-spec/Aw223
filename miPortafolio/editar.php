<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>

<header>
    <h1>Zona Administracion</h1>
    <p>Formulario para Editar</p>
</header>

<nav>
    <a href="admin.php"><i class="bi bi-arrow-clockwise"></i></a>
    <a href="index.html"><i class="bi bi-house"></i></a>
</nav>

<main>
<section>
    <h2>Editar Mensaje</h2>
    <form action="#" method="post">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">
        </div>
        <div class="campo">
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">
        </div>
        <div class="campo">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5"></textarea>
        </div>
        <button type="submit">Actualizar Mensaje</button>
    </form>
</section>
</main>

<footer>
    <p>2026 Mi portafolio web</p>
    <p>Practica de Programación Web todos los derechos reservados</p>
</footer>

</body>
</html>