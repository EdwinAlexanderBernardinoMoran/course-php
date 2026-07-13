<?php

declare(strict_types=1);

require_once  __DIR__ . '/Subtotal.php';
require_once __DIR__ . '/Discount.php';
require_once __DIR__ . '/Tax.php';

/**
 * Processes an order by calculating the subtotal, applying a discount, and calculating the total with tax.
 *
 * @param array $cart The shopping cart containing items with 'price' and 'quantity'.
 * @return array An associative array containing 'subtotal', 'discounted', and 'total' amounts.
 */
function processOrder(array $cart): array
{
    $subtotal = calculateSubtotal($cart);
    $withDiscount = applyDiscount($subtotal, 10);
    $total = calculateTotal($withDiscount, 13);

    return [
        'subtotal' => $subtotal,
        'discounted' => $withDiscount,
        'total' => $total
    ];
}
