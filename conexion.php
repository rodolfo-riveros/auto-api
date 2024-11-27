<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDatos = "bd_auto";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDatos);

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

?>