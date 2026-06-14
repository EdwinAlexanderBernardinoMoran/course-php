<?php

$cart = [
    ["product" => "Laptop", "price" => 1200],
    ["product" => "Mouse", "price" => 20],
    ["product" => "Teclado", "price" => 80]
];

$users = [
    [
        "id" => 1,
        "name" => "Ana García",
        "username" => "ana.garcia",
        "email" => "ana.garcia@example.com",
        "role" => "user",
        "status" => "active",
        "last_login" => "2026-01-20 09:15"
    ],
    [
        "id" => 2,
        "name" => "Luis Pérez",
        "username" => "luis.perez",
        "email" => "luis.perez@example.com",
        "role" => "admin",
        "status" => "active",
        "last_login" => "2026-01-21 08:40"
    ],
    [
        "id" => 3,
        "name" => "María López",
        "username" => "maria.lopez",
        "email" => "maria.lopez@example.com",
        "role" => "editor",
        "status" => "inactive",
        "last_login" => "2026-01-15 18:10"
    ]
];

// Contar el número total de usuarios
$totalUsers = count($users);
echo "Total de usuarios: $totalUsers" . PHP_EOL;


// Obtener un array con los nombres de usuario
$userNames = array_map(
    fn(array $user): string => $user['username'],
    $users
);

foreach ($userNames as $username) {
    echo "Username: $username" . PHP_EOL;
}


// Filtrar los usuarios con rol de administrador
$adminUser = array_filter(
    $users,
    fn(array $user): bool => $user['role'] === 'admin'
);

foreach ($adminUser as $admin) {
    echo "Admin encontrado: " . $admin['name'] . PHP_EOL;
}


// Verificar si el rol "admin" está permitido
$allowedRoles = array_map(
    fn(array $user): string => $user['role'],
    $users
);
$currentRole = "admin";
echo in_array($currentRole, $allowedRoles)
    ? "El rol '$currentRole' está permitido." . PHP_EOL
    : "El rol '$currentRole' no está permitido." . PHP_EOL;


// Verificar si el email de María López está disponible
$maria = $users[2];
if (array_key_exists("email", $maria)) {
    echo "El email de María es: " . $maria["email"] . PHP_EOL;
} else {
    echo "El email de María no está disponible." . PHP_EOL;
}

$totalCart = array_reduce(
    $cart,
    fn($total, $product) => $total + (float)$product["price"],
    0
);
echo "Total del carrito: $" . $totalCart . PHP_EOL;