<?php

declare(strict_types=1);

/**
 * Abstract classes are similar to interfaces, but they can contain both abstract methods (without implementation) and concrete methods (with implementation).
 * They cannot be instantiated directly and are meant to be extended by other classes.
 * Abstract classes can also have properties and constructors.
 */
abstract class PaymentProcessor
{
    /**
     * @var float The amount to be processed.
     */
    protected float $amount;

    /**
     * Constructor to initialize the amount.
     *
     * @param float $amount The amount to be processed.
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Abstract method to process the payment.
     * Subclasses must provide an implementation for this method.
     */
    abstract public function processPayment(): void;

    /**
     * Concrete method to log the transaction.
     * This method can be used by subclasses without needing to override it.
     */
    public function logTransaction(): void
    {
        echo "Logging transaction of amount: {$this->amount}" . PHP_EOL;
    }
}

class CreditCardProcessor extends PaymentProcessor
{
    /**
     * Implementation of the abstract method to process credit card payments.
     */
    public function processPayment(): void
    {
        echo "Processing credit card payment of amount: {$this->amount}" . PHP_EOL;
        $this->logTransaction();
    }
}

class PayPalProcessor extends PaymentProcessor
{
    /**
     * Implementation of the abstract method to process PayPal payments.
     */
    public function processPayment(): void
    {
        echo "Processing PayPal payment of amount: {$this->amount}" . PHP_EOL;
        $this->logTransaction();
    }
}

$payment1 = new CreditCardProcessor(100.00);
$payment1->processPayment();
