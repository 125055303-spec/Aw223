<?php

function consultaGastos() {
    require_once "conexion.php";

    $selectMsj = "SELECT * FROM gastos";

    try {
        $rsMsj = mysqli_query($conexion, $selectMsj);

        mysqli_close($conexion);

        return $rsMsj;

    } catch (Exception $e) {
        die('Algo pasó al consultar: ' . $e->getMessage());
    }
}