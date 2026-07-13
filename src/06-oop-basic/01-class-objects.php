<?php

declare(strict_types=1);

class User{
    public string $name;
    public string $email;
}

$user = new User();
$user->name = 'John Doe';
$user->email = 'johndoe26@gmail.com';

echo $user->name . PHP_EOL;