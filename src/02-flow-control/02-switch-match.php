<?php

$role = 'admin';

switch ($role) {
    case 'admin':
        echo "You have full access." . PHP_EOL;
        break;
    case 'editor':
        echo "You can edit content." . PHP_EOL;
        break;
    case 'viewer':
        echo "You can view content." . PHP_EOL;
        break;
    default:
        echo "Unknown role." . PHP_EOL;
}

$value = match ($role) {
    'admin' => "You have full access.",
    'editor' => "You can edit content.",
    'viewer' => "You can view content.",
    default => "Unknown role."
};

echo $value . PHP_EOL;

$age = 25;

$output = match (true) {
    $age < 2 => "Bebé",
    $age < 13 => "Niño",
    $age <= 19 => "Adolescente",
    $age >= 40 => "Adulto",
    $age > 19 => "Adulto joven",
};

echo $output . PHP_EOL;
