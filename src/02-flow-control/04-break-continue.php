<?php

echo "Break and Continue in Loops" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        echo "Breaking the loop at i = $i" . PHP_EOL;
        break; // Exit the loop when i is 5
    }
    echo "Current value of i: $i" . PHP_EOL;
}


echo "Using continue to skip even numbers" . PHP_EOL;
for ($e = 1; $e <= 10; $e++) {
    if ($e % 2 === 0) {
        continue; // Skip even numbers
    }
    echo "Current value of e: $e" . PHP_EOL;
}


echo "Filtering out negative values" . PHP_EOL;
$numbers = [10, -5, 23, -3, 16];

foreach ($numbers as $number) {
    if ($number < 0 ) {
        echo "Skipping negative number: $number" . PHP_EOL;
        continue; // Skip negative numbers
    }
    echo "Processing positive number: $number" . PHP_EOL;
}


echo "Searching name specifically" . PHP_EOL;
$names = ['Alice', 'Bob', 'Charlie', 'Dave', 'Eve'];
$targetName = 'Charlie';
$found = false;

foreach ($names as $name) {
    if ($name === $targetName) {
        $found = true;
        echo "Found $targetName, stopping the search." . PHP_EOL;
        break; // Stop the loop when Charlie is found
    }
    echo "Current name: $name" . PHP_EOL;
}

echo $found ? "$targetName was found in the list." : "$targetName was not found in the list." . PHP_EOL;