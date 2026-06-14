<?php

$formData = [
    "name" => "Carlos Sánchez",
    "email" => "carlos.sanchez@example.com",
    "age" => 28,
    "country" => "España",
    "password" => "",
];

$requiredFields = ["name", "email", "password"];

$missingFields = array_filter(
    $requiredFields,
    fn(string $field): bool => !array_key_exists($field, $formData) || trim((string)$formData[$field]) === ""
);

if (count($missingFields) > 0) {
    echo "Faltan los siguientes campos obligatorios: " . implode(", ", $missingFields) . PHP_EOL;
} else {
    echo "Todos los campos obligatorios están presentes." . PHP_EOL;
}
