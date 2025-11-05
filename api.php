<?php

header("Access-Control-Allow-Methods: POST, PUT, DELETE");
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "e_commercedb";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "error en conexion a db"]);
    exit();
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        # code...
        break;
    case 'GET':
        echo json_encode([
        "status" => "ok",
        "message" => "Conexión establecida correctamente",
        "host_info" => $conn->host_info,
        "server_info" => $conn->server_info,
        "client_info" => $conn->client_info
    ]);
        break;
    default:
        
        break;
}

$conn->close();
?>