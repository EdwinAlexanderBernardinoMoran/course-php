<?php

declare(strict_types=1);

/**
 * This code demonstrates a simple booking service using object-oriented programming principles.
 * It includes classes for Customer, Room, and PaymentMethod, as well as a BookingService class that handles reservations.
 * The BookingService class calculates the total cost of the reservation and processes the payment using the specified payment method.
 */
class Customer
{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}

/**
 * The Room class represents a hotel room with a name and a price per night.
 * It includes a method to retrieve the price of the room.
 */
class Room
{
    public function __construct(
        public string $name,
        private float $pricePerNight
    ) {}

    public function price(): float
    {
        return $this->pricePerNight;
    }
}

/**
 * The PaymentMethod interface defines a contract for payment methods.
 * Any class implementing this interface must provide an implementation for the pay method.
 */
interface PaymentMethod
{
    public function pay(float $amount): string;
}

/**
 * The CardPayment class implements the PaymentMethod interface and provides a concrete implementation for paying with a card.
 */
class CardPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con tarjeta aprobado";
    }
}

/**
 * The QrPayment class implements the PaymentMethod interface and provides a concrete implementation for paying with a QR code.
 */
class QrPayment implements PaymentMethod
{
    public function pay(float $amount): string
    {
        return "Pago con QR aprobado";
    }
}

/**
 * The BookingService class handles the reservation process.
 * It calculates the total cost of the reservation, applies any discounts, and processes the payment using the specified payment method.
 */
class BookingService
{
    public function reserve(Customer $customer, Room $room, int $nights, PaymentMethod $paymentMethod): void
    {
        $subtotal = $room->price() * $nights;
        $discount = 0; // TODO: Implement discount logic if needed

        $total = $subtotal - ($subtotal * $discount/100);
        $paymentResult = $paymentMethod->pay($total);

        echo "Reserva realizada para {$customer->name} en la habitación {$room->name} por {$nights} noches. Total a pagar: $total. Resultado del pago: $paymentResult" . PHP_EOL;
    }
}

$customer = new Customer("Juan Pérez", "juan.perez@example.com");
$room = new Room("Habitación Deluxe", 120);
$nights = 3;

$paymentMethod = new QrPayment();
$service = new BookingService();
$service->reserve($customer, $room, $nights, $paymentMethod);