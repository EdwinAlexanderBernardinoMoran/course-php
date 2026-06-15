<?php

declare(strict_types=1);


// Validar la existencia de una clave en un array antes de acceder a ella para evitar errores de tipo "Undefined index" o "Undefined variable".

$formData = [
    "name" => "John Doe",
];

if (isset($formData["email"])) {
    echo "Email recibido: {$formData["email"]}" . PHP_EOL;
} else {
    echo "Error: Email is required." . PHP_EOL;
}


// Validar los tipos de datos de las variables antes de realizar operaciones con ellas para evitar errores de tipo "TypeError".

function calculateTotal(float $price, int $quantity): float {
    return $price * $quantity;
}

$total = calculateTotal(100.3, 5);
echo "Total: {$total}" . PHP_EOL;


// Validar las entradas del usuario antes de procesarlas para evitar errores de tipo "Invalid argument" o "Unexpected value".

function divide(int $a, int $b): float {
    if ($a === 0 || $b === 0) {
        echo "Error: Division by zero is not allowed." . PHP_EOL;
        return 0.0; // O podrías lanzar una excepción aquí
    }
    return $a / $b;
}

$result = divide(10, 0);
echo "Result: {$result}" . PHP_EOL;


// Validar la existencia de un índice en un array antes de acceder a él para evitar errores de tipo "Undefined offset".

$fruits = ["apple", "banana", "orange"];
if (isset($fruits[2])) {
    echo "Fruit: {$fruits[2]}" . PHP_EOL;
} else {
    echo "Error: Fruit index out of bounds." . PHP_EOL;
}


// Validar el número de argumentos pasados a una función para evitar errores de tipo "ArgumentCountError".

function greet(string $name): string {
    if (func_num_args() > 1) {
        return "No deberias mandar mas de un argumento" . PHP_EOL;
    }

    return "Hola {$name}" . PHP_EOL;
}
echo greet("Alice", "Bob");
echo greet("Alice");
