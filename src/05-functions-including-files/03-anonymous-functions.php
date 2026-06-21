<?php

declare(strict_types=1);

$users = [
    ["name" => "Teddy", "role" => "admin", "age" => 28],
    ["name" => "Edgar", "role" => "user", "age" => 16],
    ["name" => "Devi", "role" => "editor", "age" => 22],
    ["name" => "Maria", "role" => "user", "age" => 35],
];

// Using an anonymous function
$formatPrice = function (float $price): string
{
    return "$" . number_format($price, 2);
};

echo $formatPrice(2500) . PHP_EOL; // Output: $2,500.00


// Using arrow functions (introduced in PHP 7.4)
$adultUsers = array_filter(
    $users,
    fn(array $user) => $user["age"] >= 18
);
echo "Adult Users:" . PHP_EOL;
foreach ($adultUsers as $user) {
    echo "- " . $user["name"] . " (" . $user["role"] . ", " . $user["age"] . " years old)" . PHP_EOL;
}

$allowedUser = "user";
$allowedUserWithRole = array_filter(
    $users,
    fn(array $user) => $user["role"] === $allowedUser
);
echo "Users with role '$allowedUser':" . PHP_EOL;
foreach ($allowedUserWithRole as $user) {
    echo "- " . $user["name"] . " (" . $user["role"] . ", " . $user["age"] . " years old)" . PHP_EOL;
}