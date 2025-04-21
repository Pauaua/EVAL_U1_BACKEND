<?php
require_once '../config/headers.php';
require_once '../data/about-us.php';

echo json_encode([
    "status" => "success",
    "data" => $aboutUs
]);
?>
