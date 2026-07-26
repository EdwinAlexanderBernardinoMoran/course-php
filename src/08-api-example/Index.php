<?php

declare(strict_types=1);

$method = $_SERVER['REQUEST_METHOD'];

echo $method . PHP_EOL;

echo "Request Method: $method" . PHP_EOL;

http_response_code(200);

echo "Server is running and responding to requests." . PHP_EOL;
