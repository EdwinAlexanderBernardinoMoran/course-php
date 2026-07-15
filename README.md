# Que es PHP?

Es un lenguaje de programacion interpretado y de propósito general, enfocado en desarrollo web. PHP es un lenguaje debilmente tipado.

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

### **Operadores aritmeticos**

- Se utilizan para realizar operaciones matemáticas.

| **Operador** | **Descripción**  |
| ------------ | ---------------- |
| +            | Suma             |
| -            | Resta            |
| \*           | Multiplicación   |
| /            | División         |
| %            | Módulo (residuo) |

### **⚖️ Operadores de asignación**

- Permiten asignar valores a una variable.

| **Operador** | **Descripción**             |
| ------------ | --------------------------- |
| =            | Asignación                  |
| +=           | Asignación y suma           |
| \*=          | Asignación y multiplicación |
| /=           | Asignación y división       |

### **🔍 Operadores de comparación**

- Se usan para **comparar valores** y devuelven true o false.

| **Operador** | **Descripción**                  |
| ------------ | -------------------------------- |
| ==           | Igualdad (valor)                 |
| ===          | Igualdad estricta (valor y tipo) |
| !=           | Diferente                        |
| !==          | Diferente estricto               |
| >            | Mayor que                        |
| <            | Menor que                        |
| >=           | Mayor o igual                    |
| <=           | Menor o igual                    |

### **🧠 Operadores lógicos**

Se usan para **combinar expresiones booleanas** y devuelven true o false.

| **Operador** | **Descripción**                                    |
| ------------ | -------------------------------------------------- |
| &&           | AND lógico (true si ambas condiciones son true)    |
| &#124;&#124; | OR lógico (true si al menos una condición es true) |
| !            | NOT lógico (invierte el valor booleano)            |

### **🧠 Operadores de incremento y decremento**

Se usan para **aumentar o disminuir el valor de una variable numérica en 1**.  
Son muy comunes en **bucles**, **contadores**, **paginación** y **procesamiento de listas**.

| **Operador** | **Descripción**                                   |
| ------------ | ------------------------------------------------- |
| ++$a         | Pre-incremento (incrementa y luego usa el valor)  |
| $a++         | Post-incremento (usa el valor y luego incrementa) |
| --$a         | Pre-decremento (decrementa y luego usa el valor)  |
| $a--         | Post-decremento (usa el valor y luego decrementa) |

## Control de flujo

- Situaciones recomendadas para el uso de condicionales:

| **Situación**                      | **Recomendado** |
| ---------------------------------- | --------------- |
| Comparaciones complejas            | if / else       |
| Rangos de valores                  | if / elseif     |
| Comparar un solo valor fijo        | switch o match  |
| Condiciones con operadores lógicos | if              |

- ⚖️ Diferencia clara entre break y continue. `continue` solo funciona dentro de bucles.

| **Instrucción** | **Qué hace**                |
| --------------- | --------------------------- |
| break           | Sale del bucle por completo |
| continue        | Salta la iteración actual   |
| Uso típico      | Buscar algo y detener       |
| Uso típico      | Filtrar o ignorar datos     |

- **break**: Termina el ciclo inmediatamente y sale del loop
- **continue**: Omite el resto de la iteración actual y pasa a la siguiente iteración del ciclo.

## Array y funciones útiles.

- Un array en PHP es una estructura de datos que permite almacenar múltiples valores en una sola variable.

```php

// Array indexado se acceden a los elementos por medio de indices.

$frutas = ["manzana", "pera", "uva"];

echo $frutas[0]; // manzana



// Array asociativo los elementos se acceden mediante claves personalizadas.

$person = [
    "nombre" => "Edwin",
    "edad" => 30,
];

echo $person["nombre"]; // Edwin



// Array multidimencional es un array que contiene otros arrays.

$users = [
    [
        "nombre" => "Juan",
        "edad" => 25,
    ],
    [
        "nombre" => "Ana",
        "edad" => 30,
    ],
];

echo $users[0]["nombre"]; // Juan
```

- Metodos para los array.

```php
array_push($products, 'Date') // Agrega un elemento al final del array.

array_pop($products); // Remueve el ultimo elemento

count($products); // Cuenta el numero de elementos

array_map(
    fn(array $user): string => $user['username'],
    $users
); // Permite aplicar una función a cada elemento de un array y devuelve un nuevo array con los resultados.

array_filter(
    $users,
    fn(array $user): bool => $user['role'] === 'admin'
); // Permite filtrar elementos de un array según una condición y devuelve un nuevo array con los elementos que cumplen dicha condición.

in_array($currentRole, $allowedRoles) // Permite verificar si un valor existe dentro de un array.

array_key_exists("email", $users); // Verificar si una clave existe en un array asociativo

array_reduce(
    $cart,
    fn($total, $product) => $total + (float)$product["price"],
    0
); // Permite reducir un array a un único valor recorriendo todos sus elementos y acumulando un resultado.

array_column($catalog, "sku") // Permite extraer los valores de una columna específica de un array multidimensional.

$requestedSku = "HD-004";

array_search($requestedSku, $array) // Busca un valor dentro de un array y devuelve la clave (índice) donde fue encontrado.

```

## Manejo basico de errores

Utilizaremos el manejo de errores utilizando `try-catch` para capturar excepciones y manejar errores de manera controlada.

```php
function greet(string $name): string
{
    if (func_num_args() > 1) {
        throw new ArgumentCountError;
    }
    return "Hola, $name!\n";
}

try {
    echo greet("Devi");
} catch (ArgumentCountError $e) {
    // Se ejecuta si hay una excepción
    echo "Error de uso: Número incorrecto de argumentos. " . $e->getMessage() . "\n";

} catch (Throwable $e) {
    echo "Ocurrió un error inesperado. Intenta nuevamente.\n";
} finally {
    // Opcional: se ejecuta siempre (con o sin error)
    echo "Operación finalizada";
}

```

## Funciones e incluir archivos.

- Funciones: Son bloques de código reutilizables que realizan una tarea específica. Se definen con la palabra clave `function` y pueden aceptar parámetros y devolver valores.

```php
    function calculateTotal(float $price, int $quantity): float
    {
        return $price * $quantity;
    }

    echo calculateTotal(19.99, 3); // 59.97
    echo calculateTotal(price: 19.99, quantity: 3); // 59.97
```

- Se pueden mandar el nombre del parametro junto con el valor, esto se llama **argumentos nombrados** y permite pasar los argumentos en cualquier orden.

- Funciones anónimas: Son funciones sin nombre que se pueden asignar a variables o pasar como argumentos a otras funciones.

```php
    $greet = function (string $name): string {
        return "Hola, $name!";
    };

    echo $greet("Devi"); // Hola, Devi!
```

- Funciones de flecha: Son una sintaxis más concisa para funciones anónimas, introducidas en PHP 7.4.

```php
    $greet = fn(string $name): string => "Hola, $name!";
    echo $greet("Devi"); // Hola, Devi!
```

**Scope de variables, funciones anonimas y de flecha:**

- Los `if` y `else` no crean un nuevo scope, por lo que las variables definidas dentro de ellos son accesibles fuera del bloque.

- Es mala practica usar variables globales dentro de funciones, ya que puede llevar a errores difíciles de depurar y hace que el código sea menos modular y más difícil de mantener. En su lugar, es preferible pasar las variables como parámetros a las funciones.

```php
$total = 100;

function showTotalWithGlobal()
{
    echo "Total inside function (using global): " . $GLOBALS['total'] . PHP_EOL;
}

showTotalWithGlobal(); // Output: Total inside function (using global): 100
```

- `$calculateTax` (con use): captura el valor de `$tax` del entorno en el momento en que se define y lo "congela" por valor. Se llama con un solo argumento: `$calculateTax(100)`. Si `$tax` cambia después, la función seguirá usando el valor original (0.13).

```php
$tax = 0.13;

$calculateTax = function (float $amount) use ($tax): float {
    return $amount * $tax;
};
```

- `$calculateTaxTwo` (con parámetro): no depende de variables externas; recibe `$tax` en cada llamada como segundo argumento: `$calculateTaxTwo(100, 0.13)`. Es más flexible y reutilizable, ya que puedes usar cualquier tasa cada vez.

```php
$tax = 0.13;

$calculateTaxTwo = function (float $amount, float $tax): float {
    return $amount * $tax;
};
```

- Cuando es funcion de flecha, no se necesita `use` para capturar `$tax`, ya que las funciones de flecha heredan automáticamente el contexto de la función padre. Se llama con un solo argumento: `$calculateTaxArrow(100)`.

```php
$tax = 0.13;

$calculateTaxArrow = fn(float $amount): float => $amount * $tax;
```

**Validar y sanitizar informacion**

- Validar un correo electrónico: Se puede utilizar la función `filter_var` con el filtro `FILTER_VALIDATE_EMAIL` para verificar si un correo electrónico es válido.

```php
// Validar un correo electrónico
$email = "test@gmail.com";

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

echo isValidEmail($email) ? "El correo electrónico es válido." . PHP_EOL : "El correo electrónico no es válido." . PHP_EOL;
```

**Incluir archivos**

- Existen 4 formas de incluir archivos en PHP.

| Name           | Descripción                                                                                                                                 |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `include`      | Incluye y evalúa el archivo especificado. Si el archivo no se encuentra, se emitirá una advertencia pero el script continuará ejecutándose. |
| `require`      | Similar a `include`, pero si el archivo no se encuentra, se emitirá un error fatal y el script se detendrá.                                 |
| `include_once` | Similar a `include`, pero solo incluye el archivo una vez, evitando inclusiones múltiples.                                                  |
| `require_once` | Similar a `require`, pero solo incluye el archivo una vez, evitando inclusiones múltiples.                                                  |

## Programacion orientada a objetos (POO)

En esta sección aprenderás los fundamentos de la Programación Orientada a Objetos (POO) en PHP, un paradigma clave para construir software reutilizable, escalable y organizado. Verás cómo aplicar los pilares de la POO con ejemplos claros y modernos.

**¿Por qué aplicar POO en PHP?**

- Facilita la organización del código en torno a objetos y clases, lo que mejora la legibilidad y mantenibilidad.
- Paradigma de programacion basado en objetos, que permite modelar entidades del mundo real y sus interacciones.
- Un objeto representa algo del mundo real.
- Combia datos (`propiedades`) y comportamiento (`métodos`) en una sola entidad.
- Organizacion del codigo por responsabilidades.
- Codigo mas legible y reutilizable.
- Agrupar datos y compartamiento.
- Base para proyectos profesionales.

**Cómo definir clases y crear objetos.**

- Una clase es una plantilla que define las propiedades y métodos de un objeto. Un objeto es una instancia de una clase.
- Un objeto es una instancia de una clase, que representa un elemento concreto con sus propios valores y comportamientos.

```php
class Room {
    public string $number;
    public int $capacity;
}
```

**Uso de propiedades y métodos en las clases.**

- Las propiedades son variables que pertenecen a una clase y almacenan datos sobre el objeto
- Los métodos son funciones que definen el comportamiento de la clase y permiten interactuar con sus propiedades.

```php
class Room {
    public string $number;
    public int $capacity;

    public function __construct(string $number, int $capacity) {
        $this->number = $number;
        $this->capacity = $capacity;
    }

    public function getDetails(): string {
        return "Room Number: {$this->number}, Capacity: {$this->capacity}";
    }
}
$room = new Room("101", 2);
echo $room->getDetails(); // Room Number: 101, Capacity: 2
```

**Implementación de constructores para inicializar objetos.**

- Un constructor se utiliza para inicializar objetos correctamente al crearlos.

```php
class Room {
    public string $number;
    public int $capacity;

    public function __construct(string $number, int $capacity) {
        $this->number = $number;
        $this->capacity = $capacity;
    }
}
$room = new Room("101", 2);
echo $room->number; // 101
```

**Control de acceso con visibilidad (public, private) y encapsulación de datos.**

- La visibilidad de las propiedades y métodos determina quién puede acceder a ellos.
- `public`: accesible desde cualquier lugar.
- `private`: accesible solo dentro de la clase.

**Principios básicos de herencia entre clases.**

- La herencia permite que una clase (subclase) herede propiedades y métodos de otra clase (superclase), promoviendo la reutilización de código y la creación de jerarquías de clases.

```php
class Room {
    public string $number;
    public int $capacity;

    public function __construct(string $number, int $capacity) {
        $this->number = $number;
        $this->capacity = $capacity;
    }
}
class SuiteRoom extends Room {
    public bool $hasBalcony;

    public function __construct(string $number, int $capacity, bool $hasBalcony) {
        parent::__construct($number, $capacity);
        $this->hasBalcony = $hasBalcony;
    }
}

class DeluxeRoom extends Room {
    public bool $hasJacuzzi;

    public function __construct(string $number, int $capacity, bool $hasJacuzzi) {
        parent::__construct($number, $capacity);
        $this->hasJacuzzi = $hasJacuzzi;
    }
}
```

**Interfaces como contratos para estructurar el código.**

- Una interfaz define un contrato que las clases deben cumplir, especificando los métodos que deben implementar. Esto permite una mayor flexibilidad y consistencia en el diseño del código.

```php
interface Reservable {
    public function reserve(): bool;
}
class Room implements Reservable {
    public string $number;
    public int $capacity;

    public function __construct(string $number, int $capacity) {
        $this->number = $number;
        $this->capacity = $capacity;
    }
}
```

**Clases abstractas y su utilidad.**

- Una clase abstracta es una clase que no puede ser instanciada directamente y puede contener métodos abstractos que deben ser implementados por las subclases. Esto permite definir una estructura común para un grupo de clases relacionadas.

```php
abstract class Room {
    public string $number;
    public int $capacity;

    public function __construct(string $number, int $capacity) {
        $this->number = $number;
        $this->capacity = $capacity;
    }

    abstract public function getDetails(): string;
}
class SuiteRoom extends Room {
    public bool $hasBalcony;
    public function __construct(string $number, int $capacity, bool $hasBalcony) {
        parent::__construct($number, $capacity);
        $this->hasBalcony = $hasBalcony;
    }
    public function getDetails(): string {
        return "Suite Room: $this->number, Capacity: $this->capacity, Has Balcony: " . ($this->hasBalcony ? 'Yes' : 'No');
    }
}
```

**Caso práctico: sistema de reserva de habitación con lógica aplicada.**
