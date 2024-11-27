<?php

require_once('../conexion.php');
require_once('../Auto.php');

$resultado = Auto::mostrarAuto($conexion);

if(mysqli_num_rows($resultado) > 0){
    $autos = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $autos[] = $fila;
    }
    echo json_encode($autos);
}else{
    echo json_encode(['mensaje' => 'No hay autos registrados']);
}