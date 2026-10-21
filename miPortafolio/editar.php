<?php
include 'conexion.php';

// Actualizar el registro cuando se envía el formulario
if (isset($_POST['id'])) {

    $id = (int) $_POST['id'];
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);

    // Evitar campos vacíos
    if ($nombre == '' || $correo == '' || $mensaje == '') {
        echo "<script>
            alert('No se permiten campos vacíos');
            history.back();
        </script>";
        exit;
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE mensajes
            SET nombre = ?, correo = ?, mensaje = ?
            WHERE id = ?";

    $stmt = mysqli_prepare($conexion, $sql);

    mysqli_stmt_bind_param(
        $stmt, "sssi", $nombre, $correo,$mensaje, $id
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Mensaje actualizado correctamente');
            window.location = 'admin.php';
        </script>";
        exit;
    } else {
        echo "<script>
            alert('Error al actualizar el mensaje');
            history.back();
        </script>";
        exit;
    }
}

// Consultar el registro seleccionado
if (!isset($_GET['id'])) {
    header('Location: admin.php');
    exit;
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM mensajes WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$fila = mysqli_fetch_assoc($resultado);

// Verificar que exista el registro
if (!$fila) {
    echo "<script>
        alert('No se encontró el mensaje');
        window.location = 'admin.php';
    </script>";
    exit;
}
?>

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
    <h1>Zona Administración</h1>
    <p>Formulario para Editar</p>
</header>

<nav>
    <a href="admin.php">
        <img src="Imagenes/regresar.png" width="25">
    </a>

    <a href="index.html">
        <img src="Imagenes/casa.png" width="25">
    </a>
</nav>

<main>
<section>
    <h2>Editar Mensaje</h2>

    <form action="editar.php" method="post">

        <input type="hidden" name="id"
               value="<?php echo $fila['id']; ?>">

        <div class="campo">
            <label for="nombre">Nombre</label>

            <input type="text"
                   id="nombre"
                   name="nombre"
                   placeholder="Escribe tu nombre"
                   value="<?php echo $fila['nombre']; ?>"
                   required>
        </div>

        <div class="campo">
            <label for="correo">Correo electrónico</label>

            <input type="email"
                   id="correo"
                   name="correo"
                   placeholder="ejemplo@correo.com"
                   value="<?php echo $fila['correo']; ?>"
                   required>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje</label>

            <textarea id="mensaje"
                      name="mensaje"
                      rows="5"
                      required><?php echo $fila['mensaje']; ?></textarea>
        </div>

        <button type="submit" name="actualizar">
            Actualizar Mensaje
        </button>

    </form>
</section>
</main>

<footer>
    <p>2026 Mi portafolio web</p>
    <p>Práctica de Programación Web. Todos los derechos reservados.</p>
</footer>

</body>
</html>
