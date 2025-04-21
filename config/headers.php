<?php
// Permite acceso desde cualquier origen
header("Access-Control-Allow-Origin: *");

// Permite métodos específicos
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Define tipo de contenido como JSON
header("Content-Type: application/json; charset=UTF-8");

// Permite ciertos headers en las solicitudes
header("Access-Control-Allow-Headers: Content-Type, Authorization");
?>
