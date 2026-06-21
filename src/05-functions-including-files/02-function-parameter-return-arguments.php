<?php

declare(strict_types=1);

function calculateTotal(float $price, int $quantity): float
{
    return $price * $quantity;
}

$total = calculateTotal(19.99, 3); // Using positional arguments
$totalTwo = calculateTotal(price: 15.50, quantity: 2); // Using named arguments for better readability

echo "The total price is: $" . number_format($total, 2) . PHP_EOL;
echo "The total price for the second order is: $" . number_format($totalTwo, 2) . PHP_EOL;
