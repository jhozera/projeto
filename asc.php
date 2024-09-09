<?php
header('Content-Type: application/json');

// Dados fictícios com cores
$data = [
    ["Segunda", 60, "#03dce4"],
    ["Terça", 80, "#03dce4"],
    ["Quarta", 100, "#03dce4"],
    ["Quinta", 120, "#03dce4"],
    ["Sexta", 90, "#03dce4"]
];

// Envia os dados como JSON
echo json_encode($data);
?>
