<?php
header('Content-Type: application/json');

// Dados fictícios
$data = [
    ['seg', 200],
    ['ter', 100],
    ['qua', 400],
    ['qui', 250],
    ['sext', 200]
];

// Envia os dados como JSON
echo json_encode($data);
?>
