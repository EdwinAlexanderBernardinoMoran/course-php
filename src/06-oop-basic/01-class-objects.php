<?php

declare(strict_types=1);

class User{
    private int $id;
    public string $name;
    public string $email;
    private string $password;

    public function __construct(int $id, string $name, string $email, string $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function showProfile(): void
    {
        echo "Name: {$this->name}" . PHP_EOL;
        echo "Email: {$this->email}" . PHP_EOL;
    }

    public function verifyPassword(string $password): bool
    {
        return $this->password === $password;
    }

    public function getId(): int
    {
        return $this->id;
    }
}

$user = new User(1, 'John Doe', 'johndoe26@gmail.com', 'securepassword');

echo $user->name . PHP_EOL;

$user->showProfile();
echo $user->verifyPassword('securepasswordg') ? "Password is correct" . PHP_EOL : "Password is incorrect" . PHP_EOL;

echo "ID: " . $user->getId() . PHP_EOL; // This will work because getId() is a public method
