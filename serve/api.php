<?php 
require __DIR__ . "/database.php";

$albums = $database;

header('Content-Type: application/json');

echo json_encode($albums);
?>