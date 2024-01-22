<?php

namespace Curso\DesignPattern\Models\Invoice;

use Curso\DesignPattern\Models\BudgetItem;

class Invoice
{
    public string $cnpj;
    public string $companyName;
    public array $items;
    public string $observations;
    public \DateTimeInterface $emissionDate;
    public float $taxValue;

    public function __clone(): void
    {
        $this->emissionDate = new \DateTimeImmutable();
    }

    public function value(): float
    {
        return array_reduce($this->items, function ($total, BudgetItem $item) {
            return $total + $item->value();
        }, 0);
    }
}