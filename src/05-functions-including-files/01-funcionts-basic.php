<?php

declare(strict_types=1);

function showWelcomeMessage(): void
{
    echo "Welcome to the PHP functions tutorial!" . PHP_EOL;
}

function welcomeMessage(): string
{
    return "Welcome to the PHP functions tutorial!";
}


showWelcomeMessage();
echo welcomeMessage() . PHP_EOL;