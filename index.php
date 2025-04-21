<?php
// cabeceras para permitir CORS y definir JSON
require_once 'config/headers.php';

// Bienvenida!
$response = [
    "mensaje" => "Bienvenido a la API de Coningenio",
    "endpoints_disponibles" => [
        "GET /api/services.php" => "Listado de servicios",
        "GET /api/about-us.php" => "Información sobre la empresa",
        "POST /api/contact.php" => "Enviar formulario de contacto"
    ],
    "estado" => "API funcionando correctamente"
];

// Mostrar la respuesta en formato JSON
echo json_encode($response);
?>
