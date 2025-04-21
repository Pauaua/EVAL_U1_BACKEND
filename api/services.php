<?php
require_once '../config/headers.php';
require_once '../data/services.php';

echo json_encode([
    "status" => "success",
    "data" => $services
]);
?>
