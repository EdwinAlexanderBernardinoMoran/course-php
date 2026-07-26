<?php

declare(strict_types=1);

header(
    "Content-Type: application/json"
);

try {
    $method = $_SERVER['REQUEST_METHOD'];

    if ($method === 'GET') {
        $task = [
            [ "id" => 1, "title" => "Task 1", "description" => "This is task 1", "status" => "pending"],
            [ "id" => 2, "title" => "Task 2", "description" => "This is task 2", "status" => "completed"],
            [ "id" => 3, "title" => "Task 3", "description" => "This is task 3", "status" => "in progress"]
        ];

        echo json_encode($task) . PHP_EOL;
    }

    if ($method === 'POST') {
        $input = file_get_contents("php://input");
        $data = json_decode($input, true);

        validationTask($data);

        http_response_code(201);
        $response = [
            "status" => "success",
            "message" => "Task created successfully",
            "data" => $data
        ];

        echo json_encode($response) . PHP_EOL;
    }

    if ($method !== 'GET' && $method !== 'POST') {
        http_response_code(405);
        $response = [
            "status" => "error",
            "message" => "Method not allowed"
        ];
        echo json_encode($response) . PHP_EOL;
    }
} catch (Exception $exception) {
    http_response_code(500);
    $response = [
        "status" => "error",
        "message" => $exception->getMessage()
    ];
    echo json_encode($response) . PHP_EOL;
}

/**
 * Validate input data
 *
 * @param array $data The input data to validate
 */
function validationTask(array $data): void{
    $requiredFields = ["title", "description", "status"];

    $missingFields = array_filter(
        $requiredFields,
        fn(string $field) : bool => !array_key_exists($field, $data) || trim((string)$data[$field]) === ""
    );

    if (count($missingFields) > 0) {
        http_response_code(400);
        $response = [
            "status" => "error",
            "message" => "Missing required fields",
            "missing_fields" => array_values($missingFields)
        ];
        echo json_encode($response) . PHP_EOL;
        exit;
    }
}
