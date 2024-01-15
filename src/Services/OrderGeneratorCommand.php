<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Models\{Budget, Order};
use DateTime;

readonly class OrderGeneratorCommand
{
    public function __construct(
        private float  $budgetValue,
        private int    $itemsQuantity,
        private string $clientName
    )
    {}

    public function getBudgetValue(): float
    {
        return $this->budgetValue;
    }

    public function getItemsQuantity(): int
    {
        return $this->itemsQuantity;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }
}