<?php
header('Content-Type: application/json');

// Lista de estadios
$estadios = [
    "azteca" => [
        "nombre" => "Estadio Azteca",
        "lat" => 19.3029,
        "lng" => -99.1505
    ],
    "bbva" => [
        "nombre" => "Estadio BBVA",
        "lat" => 25.6692,
        "lng" => -100.2445
    ],
    "akron" => [
        "nombre" => "Estadio Akron",
        "lat" => 20.6828,
        "lng" => -103.4626
    ],
    "cu" => [
        "nombre" => "Estadio Olímpico Universitario",
        "lat" => 19.3322,
        "lng" => -99.1869
    ]
];

// Validar parámetro
if (!isset($_GET['estadio'])) {
    echo json_encode(["error" => "No se recibió el estadio"]);
    exit;
}

$estadio = $_GET['estadio'];

if (!array_key_exists($estadio, $estadios)) {
    echo json_encode(["error" => "Estadio no encontrado"]);
    exit;
}

// Enviar datos del estadio
echo json_encode($estadios[$estadio]);
