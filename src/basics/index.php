<?php

declare(strict_types=1); // Habilita el modo estricto para tipos de datos

// Comentario de una linea

/**
 * Comentario de varias lineas
 * con formato de bloque
 */

echo "Hola Mundo!" . PHP_EOL; // Imprime un mensaje en pantalla

class User{
    public string $name;
    public string $email;
}

$user = new User();
$user->name = "John Doe";
$user->email = "johndoe@gmail.com";

echo "Nombre: " . $user->name . PHP_EOL; // Imprime el nombre del usuario
echo "Email: " . $user->email . PHP_EOL; // Imprime el email del usuario

// $user->name = 2323; // Esto generará un error de tipo, ya que se espera una cadena de texto