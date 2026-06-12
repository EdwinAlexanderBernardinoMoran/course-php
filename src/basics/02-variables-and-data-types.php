<?php 

declare(strict_types=1); // Habilita el modo estricto para tipos de datos

// String
$name = "Edwin";
$city = "Bogotá";

echo "Nombre: $name" . PHP_EOL;
echo "Ciudad: $city" . PHP_EOL;

// Integer
$age = 30;
echo "Edad: $age" . PHP_EOL;

// Float
$height = 1.75;
echo "Altura: $height" . PHP_EOL;

// Boolean
$isAvailable = true;
echo "Disponible: " . ($isAvailable ? "Sí" : "No") . PHP_EOL;

// Null
$emptyValue = null;
echo "Valor vacio: $emptyValue" . PHP_EOL; // Imprime "Valor vacío: " seguido de una línea nueva
echo "Valor vacio: " . var_export($emptyValue, true) . PHP_EOL; // Imprime "Valor vacío: NULL" seguido de una línea nueva

// Array
$colors = ["Rojo", "Verde", "Azul"];
echo "Colores: " . implode(", ", $colors) . PHP_EOL; // Imprime "Colores: Rojo, Verde, Azul" seguido de una línea nueva

// Array asociativo
$user = [
    "name" => "Edwin",
    "email" => "edwin@example.com",
    "age" => 30
];
echo "Usuario: " . $user["name"] . ", Email: " . $user["email"] . ", Edad: " . $user["age"] . PHP_EOL; // Imprime los detalles del usuario

// Const
const API_URL = "https://api.example.com";
echo "URL: " . API_URL . PHP_EOL; // Imprime "URL: https://api.example.com" seguido de una línea nueva

echo "Tipo de dato de name: " . gettype($name) . PHP_EOL; // Imprime el tipo de dato de $name