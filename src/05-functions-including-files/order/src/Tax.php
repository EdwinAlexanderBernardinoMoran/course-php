<?php

declare(strict_types=1);

/**
 * Calculates the total amount after applying tax to a given amount.
 *
 * @param float $amount The original amount before tax.
 * @param float $taxRate The tax rate as a percentage (e.g., 13 for 13%).
 * @return float The total amount after applying the tax.
 */
function calculateTotal(float $amount, float $taxRate): float
{
    if ($taxRate <= 0) {
        return $amount;
    }

    return $amount + ($amount * $taxRate / 100);
}
