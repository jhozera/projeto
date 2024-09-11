<?php
header('Content-Type: application/json');


$data = [
    ["Segunda", 60, "#03dce4"],
    ["Terça", 80, "#03dce4"],
    ["Quarta", 100, "#03dce4"],
    ["Quinta", 120, "#03dce4"],
    ["Sexta", 90, "#03dce4"]
];


echo json_encode($data);
?>
