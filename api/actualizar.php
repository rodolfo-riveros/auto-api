<?php

require_once('../conexion.php');
require_once('../Auto.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id) &&!empty($data->placa) && !empty($data->modelo) && !empty($data->color)) {
    $autito = new Auto($conexion, $data->placa, $data->modelo, $data->color);

    if ($autito->actualizarAuto($data->id)) {
        echo json_encode(["message" => "Auto actualizado correctamente."]);
    } else {
        echo json_encode(["message" => "Error al actualizado el auto."]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos."]);
}