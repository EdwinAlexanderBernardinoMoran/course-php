<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use App\Models\User;
use App\Services\UserService;
  
$quote = new \RandomQuotes\RandomQuotes();

print_r($quote->generate());
echo "\n";

$user = new User('John Doe', 'johndoe@gmail.com');

$service = new UserService();
$service->create($user);
