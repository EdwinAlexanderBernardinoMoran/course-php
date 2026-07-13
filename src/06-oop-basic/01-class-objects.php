<?php

declare(strict_types=1);

class User{
    public string $name;
    public string $email;

    public function showProfile(): void
    {
        echo "Name: {$this->name}" . PHP_EOL;
        echo "Email: {$this->email}" . PHP_EOL;
    }
}

$user = new User();
$user->name = 'John Doe';
$user->email = 'johndoe26@gmail.com';

echo $user->name . PHP_EOL;

$user->showProfile();
