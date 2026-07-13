<?php

declare(strict_types=1);

/**
 * Applies a discount to a given amount based on the provided discount rate.
 *
 * @param float $amount The original amount before discount.
 * @param float $discountRate The discount rate as a percentage (e.g., 10 for 10%).
 * @return float The amount after applying the discount.
 */
function applyDiscount(float $amount, float $discountRate): float
{
    if ($discountRate <= 0) {
        return $amount;
    }

    return $amount - ($amount * $discountRate / 100);
}
