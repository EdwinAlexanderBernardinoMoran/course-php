<?php

declare(strict_types=1);

/**
 * Calculates the subtotal of a list of items, each with a price and quantity.
 *
 * @param array $items An array of items, where each item is an associative array containing 'price' and 'quantity'.
 * @return float The calculated subtotal amount.
 */
function calculateSubtotal(array $items): float
{
    if (empty($items)) {
        return 0;
    }

    $subtotal = 0;

    foreach ($items as $item) {
        if (!isset($item['price']) || !isset($item['quantity'])){
            continue;
        }

        $subtotal += $item['price'] * $item['quantity'];
    }

    return $subtotal;
}
