<?php
include 'conexion.php';

// Comprobar que se recibió el ID
if (isset($_GET['id'])) {

    $id = (int) $_GET['id'];

    // Preparar la consulta para borrar el mensaje
    $sql = "DELETE FROM mensajes WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    // Ejecutar la eliminación
    if (mysqli_stmt_execute($stmt)) {

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>
                alert('Mensaje borrado correctamente');
                window.location = 'admin.php';
            </script>";
        } else {
            echo "<script>
                alert('No se encontró el mensaje');
                window.location = 'admin.php';
            </script>";
        }

    } else {
        echo "<script>
            alert('Error al borrar el mensaje');
            window.location = 'admin.php';
        </script>";
    }

    mysqli_stmt_close($stmt);

} else {
    header('Location: admin.php');
    exit;
}
?>
