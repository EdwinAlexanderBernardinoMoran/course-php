<?php

$products = ['Apple', 'Banana', 'Cherry'];

array_push($products, 'Date'); // Adds 'Date' to the end of the array

foreach ($products as $product) {
    echo $product . PHP_EOL;
}

echo "After removing the last product:" . PHP_EOL;

array_pop($products); // Removes the last element ('Date')
foreach ($products as $product) {
    echo $product . PHP_EOL;
}

$user = [
    "name" => "John Doe",
    "email" => "john.doe@example.com",
    "role" => "admin"
];

echo $user['name'] . PHP_EOL; // Outputs: John Doe

// Array multidimensional
$users = [
    [
        "name" => "John Doe",
        "email" => "john.doe@example.com",
        "role" => "admin"
    ],
    [
        "name" => "Jane Smith",
        "email" => "jane.smith@example.com",
        "role" => "editor"
    ],
];

foreach ($users as $user) {
    echo $user['name'] . " - " . $user['email'] . " - " . $user['role'] . PHP_EOL;
}