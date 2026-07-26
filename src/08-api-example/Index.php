<?php

declare(strict_types=1);

$method = $_SERVER['REQUEST_METHOD'];

echo $method . PHP_EOL;
echo "Request Method: $method" . PHP_EOL;
http_response_code(200);
echo "Server is running and responding to requests." . PHP_EOL;

header(
    "Content-Type: application/json"
);

$response = [
    "status" => "success",
    "message" => "Server is running and responding to requests."
];

echo json_encode($response). PHP_EOL;

$input = file_get_contents("test.json");
$data = json_decode($input, true);

echo json_encode($data);
