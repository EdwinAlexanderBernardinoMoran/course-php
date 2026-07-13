<?php

declare(strict_types=1);

/**
 * Format a date string into a specific format.
 *
 * @param string $date The date string to format.
 * @return string The formatted date string.
 */
function formatDate(string $date): string
{
    return date('d/m/Y', strtotime($date));
}
