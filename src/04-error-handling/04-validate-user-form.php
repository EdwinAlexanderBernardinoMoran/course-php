<?php

declare(strict_types=1);

function validateUserForm(array $formData): array
{
    $requiredFields = ['username', 'email', 'password'];

    return array_filter(
        $requiredFields,
        fn(string $field) => !isset($formData[$field]) || trim((string)$formData[$field]) === ''
    );
}

$formData = [
    "username" => "John Doe",
    "email" => "johndoe@gmail.com",
    "password" => "12345678"
];

$errors = validateUserForm($formData);
if (count($errors) > 0) {
    echo "The following fields are required and cannot be empty: " . implode(', ', $errors) . PHP_EOL;
} else {
    echo "Form is valid!" . PHP_EOL;
}
