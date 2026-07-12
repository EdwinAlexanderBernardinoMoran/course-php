<?php

declare(strict_types=1);

if (true) {
    $message = "Hello from inside the if block!";
}

echo $message . PHP_EOL; // Output: Hello from inside the if block!

foreach ([1, 2, 3, 4, 5] as $number) {
    $lastNumber = $number;
}

echo $lastNumber . PHP_EOL; // Output: 5

$total = 100;

function showTotalWithGlobal()
{
    echo "Total inside function (using global): " . $GLOBALS['total'] . PHP_EOL;
}

showTotalWithGlobal(); // Output: Total inside function (using global): 100

function showTotal(float $total): void
{
    echo "Total inside function (using parameter): " . $total . PHP_EOL;
}

showTotal($total); // Output: Total inside function (using parameter): 100


// ------------------------- Funciones -------------------------

$tax = 0.13;

$calculateTax = function (float $amount) use ($tax): float {
    return $amount * $tax;
};

$calculateTaxTwo = function (float $amount, float $tax): float {
    return $amount * $tax;
};

echo "Impuesto (closure) sobre 100: " . $calculateTax(100) . PHP_EOL; // Output: Impuesto sobre 100: 13


// ------------------------- Funciones de flecha -------------------------

$calculateTaxArrow = fn(float $amount): float => $amount * $tax;

echo "Impuesto (arrow function) sobre 100: " . $calculateTaxArrow(100) . PHP_EOL; // Output: Impuesto sobre 100: 13
