<?php

declare(strict_types=1);

// Loop for
$number = 3;

for ($i = 0; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i) . PHP_EOL;
}


// Loop while
$numberTwo = 4;
$attempts = 0;

while ($attempts <= 10) {
    echo "$numberTwo x $attempts = " . ($numberTwo * $attempts) . PHP_EOL;
    $attempts++;
}


// Loop foreach
$names = ['Alice', 'Bob', 'Charlie', 'Dave', 'Eve'];

foreach ($names as $index => $name) {
    echo "Hello, $name!" . " Position: $index" . PHP_EOL;
}