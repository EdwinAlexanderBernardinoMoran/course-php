<?php

$name = "Edwin";
$course = "\"PHP moderno\"";

$message = "Bienvenido " . $name . " al curso de " . $course . "!";
$interpolatedMessage = "Bienvenido {$name} al curso de {$course}!";

echo $message . PHP_EOL;
echo $interpolatedMessage . PHP_EOL;

$words = ["Bienvenido", $name, "al curso de", $course . "!"];
$sentence = implode(" ", $words);

echo $sentence . PHP_EOL;

$calculateMessage = "El resultado de 5 + 3 es: " . (5 + 3);
echo $calculateMessage . PHP_EOL;
