<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function create(User $user): void
    {
        // Logic to create a user in the database
        echo "User {$user->name} with email {$user->email} has been created." . PHP_EOL;
    }
}
