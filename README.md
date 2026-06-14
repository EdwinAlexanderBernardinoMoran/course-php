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
$products = ['Apple', 'Banana', 'Cherry'];

array_push($products, 'Date') // Adds 'Date' to the end of the array
array_pop($products); // Removes the last element ('Date')
```
