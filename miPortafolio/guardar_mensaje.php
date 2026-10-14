<?php

require_once "conexion.php";

$nombre = $_POST['txtnombre'];
$correo = $_POST['txtemail'];
$mensaje = $_POST['txtmensaje'];

$sqlInsert = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?, ?, ?)";

$stmt = $conexion->prepare($sqlInsert);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);
if ($stmt->execute()) {
    echo "Mensaje guardado exitosamente";
} else {
    echo "Error al guardar el mensaje: " . $conexion->error;
}

