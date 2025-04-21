<?php
require_once '../config/headers.php';

// Solo método POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        "status" => "error",
        "message" => "Método no permitido. Solo POST."
    ]);
    exit;
}

// Obtener datos
$input = json_decode(file_get_contents('php://input'), true);

// Validar campos
if (!isset($input['nombre']) || !isset($input['email']) || !isset($input['mensaje'])) {
    echo json_encode([
        "status" => "error",
        "message" => "Faltan datos obligatorios (nombre, email, mensaje)."
    ]);
    exit;
}

// Simular guardar en base de datos, se devuelve éxito
echo json_encode([
    "status" => "success",
    "message" => "Formulario enviado correctamente.",
    "data" => $input
]);
?>
