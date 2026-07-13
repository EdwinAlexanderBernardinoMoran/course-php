<?php

declare(strict_types=1);

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function sanitizeUserId(string $userId): int
{
    $sanitize = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    return (int) $sanitize;
}

$email = "test@gmail.com";
$userId = "123abc456dfgfgfs334343434";

echo isValidEmail($email) ? "El correo electrónico es válido." . PHP_EOL : "El correo electrónico no es válido." . PHP_EOL;
echo "El ID de usuario sanitizado es: " . sanitizeUserId($userId) . PHP_EOL;

