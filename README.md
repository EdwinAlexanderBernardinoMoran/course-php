# Que es PHP?

Es un lenguaje de programacion interpretado y de propósito general, enfocado en desarrollo web.

**Creador**: Originalmente creado en 1994 por Rasmus Lerdorf.

## ¿ Por que aprender php ?

- Potencia más del 75% de los sitios web del mundo, incluyendo WordPress.
- Frameworks modernos como laravel y symfony hacen PHP más limpio, seguro y estructurado.
- Excelente para freelancers, MVP's y desarrollo backend rápido.

## Fundamentos

- Esta es una funcion que habilita el modo estricto para tipos de datos.

```php
declare(strict_types=1)
```

- Imprime una línea nueva para separar la salida.

```php
PHP_EQL
```

- Imprime el valor y tipo de dato de $name.

```php
$emptyValue = null;
echo "Valor vacio: " . var_export($emptyValue, true) . PHP_EOL
```

- Imprime el tipo de dato

```php
gettype($variable)
```

- Declaracion de una constante

```php
const API_URL = "https://api.example.com";
echo "URL: " . API_URL . PHP_EOL;
```

- Interpolacion de string y escapar string.

```php
$name = "Edwin";
$course = "\"PHP moderno\"";

$interpolatedMessage = "Bienvenido {$name} al curso de {$course}!";
```
