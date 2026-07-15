<?php

declare(strict_types=1);

class BaseUser{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function logAccess(): void
    {
        echo "Access logged for user: {$this->name}" . PHP_EOL;
    }
}

class AdminUser extends BaseUser{
    public function showRole(): void
    {
        echo "Role: Admin" . PHP_EOL;
        $this->logAccess(); // Accessing the protected method from the parent class
    }

    public function dashboard(): void
    {
        $this->logAccess(); // Accessing the protected method from the parent class
        echo "Welcome to the Admin Dashboard, {$this->name}" . PHP_EOL;
    }
}

$admin = new AdminUser('Jane Doe');
$admin->showRole();
$admin->dashboard();
