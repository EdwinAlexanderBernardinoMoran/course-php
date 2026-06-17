<?php

declare(strict_types=1);

function getPriceWithTax(float $price, float $taxRate): float {
    if($price < 0) {
        throw new InvalidArgumentException("Price cannot be negative.");
    }

    $tax = $price * $taxRate;

    return $price + $tax;
}

try {
    $finalPrice = getPriceWithTax(100.0, 0.10);
    echo "Final price: {$finalPrice}" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
