<?php
$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="gastos_db";
$conexion=new mysqli($servidor,$usuario,$password,$baseDeDatos);
if($conexion->connect_error){
    die("Conexion fallida: ".$conexion->connect_error);
}
echo "Conexion exitosa";