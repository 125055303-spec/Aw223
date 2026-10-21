
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
    <h1>Zona Administración</h1>
    <p>Mensajes Recibidos</p>
</header>

<nav>
    <a href="index.html">
        <img src="Imagenes/casa.png" width="30" alt="Inicio">
    </a>
</nav>

<main>
    <section>
        <h2>Mensajes Recibidos</h2>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require_once 'consulta_mensaje.php';

                $rsMsj = consultaMensajes();

                while ($arrMsj = mysqli_fetch_array($rsMsj)) {

                    echo "<tr>
                        <td>" . $arrMsj['nombre'] . "</td>
                        <td>" . $arrMsj['correo'] . "</td>
                        <td>" . $arrMsj['mensaje'] . "</td>
                        <td>" . $arrMsj['timeStamps'] . "</td>

                        <td>
                            <a href='editar.php?id=" . $arrMsj['id'] . "'>
                                <img src='Imagenes/editar.png' width='25'>
                            </a>

                            <a href='borrar.php?id=" . $arrMsj['id'] . "'
                               onclick=\"return confirm('¿Estás seguro de borrar este mensaje?');\">
                                <img src='Imagenes/boteBasura.png'  width='25'>
                            </a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</main>

<footer>
    <p>2026 Mi portafolio web</p>
    <p>Practica de Programación Web todos los derechos reservados</p>
</footer>

<script>
    const parametros = new URLSearchParams(window.location.search);

    if (parametros.get("actualizado") === "1") {
        alert("El mensaje se actualizó correctamente.");
    }

    if (parametros.get("borrado") === "1") {
        alert("El mensaje se eliminó correctamente.");
    }

    if (parametros.get("borrado") === "0") {
        alert("No se pudo eliminar el mensaje.");
    }
</script>

</body>
</html>
