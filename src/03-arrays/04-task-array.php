<?php

$catalog = [
    ["sku" => "LP-001", "name" => "Laptop", "price" => 1200, "stock" => 3],
    ["sku" => "MS-002", "name" => "Mouse", "price" => 25, "stock" => 0],
    ["sku" => "KB-003", "name" => "Teclado", "price" => 80, "stock" => 12],
];

$usersTask = [
    ["id" => 1, "name" => "Ana", "email" => "ana@email.com", "role" => "user"],
    ["id" => 2, "name" => "Luis", "email" => "luis@email.com", "role" => "admin"],
    ["id" => 3, "name" => "María", "email" => "maria@email.com", "role" => "editor"],
];


// Task: Transformar el array de usuarios para obtener un nuevo array con la siguiente estructura:

$userTransformed = array_map(
    fn(array $user): array => [
        "id" => $user["id"],
        "label" => "{$user["name"]} ({$user["role"]})",
    ],
    $usersTask
);

foreach ($userTransformed as $user) {
    echo "- {$user["label"]}" . PHP_EOL;
}


// Task: Filtrar los productos que están en stock (stock > 0) y mostrar su nombre y precio.

$productsInStock = array_filter(
    $catalog,
    fn(array $product): bool => $product["stock"] > 0
);

foreach ($productsInStock as $product) {
    echo "{$product["name"]} | Precio: \${$product["price"]}" . PHP_EOL;
}
