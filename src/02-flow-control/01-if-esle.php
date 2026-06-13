<?php
declare(strict_types=1);

$age = 17;

// Using if-else statement
if ($age >= 18) {
    echo "You are an adult." . PHP_EOL;
} else {
    echo "You are a minor." . PHP_EOL;
}

// Using ternary operator
$status = ($age >= 18) ? "adult" : "minor";
echo "You are an $status." . PHP_EOL;


// Using if-elseif-else statement
$score = 60;

if ($score >= 90) {
    echo "Excellent rating" . PHP_EOL;
} elseif ($score >= 70) {
    echo "Approved" . PHP_EOL;
} else {
    echo "Failed" . PHP_EOL;
}
