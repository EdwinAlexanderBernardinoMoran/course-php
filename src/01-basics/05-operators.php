<?php

declare(strict_types=1);

echo "🛒 Operadores en PHP\n\n";

$price = 100;
$qty = 1;
$stock = 2;
$coupon = "DEV10";

// 1) Comparación + Lógicos: ¿se puede comprar?
$canBuy = ($qty <= $stock) && ($qty > 0);

echo "Stock: $stock | Pedido: $qty\n";
echo "¿Se puede comprar? " . ($canBuy ? "Sí ✅" : "No ❌") . "\n";

if (!$canBuy) {
    echo "Motivo: stock insuficiente o cantidad no válida" . PHP_EOL;
    exit;
}

$subtotal = $price * $qty;
$hasDiscount = ($coupon === "DEV10") || ($qty >= 5);
$discount = 0;

if ($hasDiscount) {
    $discount = $subtotal * 0.10; // 10% de descuento
}

$total = 0.0;
$total = $subtotal - $discount;

$orderNumber = 99;
echo "Número de orden: " . (++$orderNumber) . " Confirmada" . PHP_EOL;

$stock -= $qty; // Actualizar stock
echo "Stock restante: {$stock}" . PHP_EOL;
echo "Total a pagar: \${$total}" . PHP_EOL;
echo "Descuento aplicado: \${$discount}" . PHP_EOL;
echo "Gracias por su compra!" . PHP_EOL;