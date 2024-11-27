<?php
require_once('../conexion.php');
require_once('../Auto.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id)) {
    if (Auto::eliminarAuto($data->id, $conexion)) {
        echo json_encode(["message" => "Auto eliminado correctamente."]);
    } else {
        echo json_encode(["message" => "Error al eliminar el auto."]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos."]);
}
?>