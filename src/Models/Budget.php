<?php

namespace Curso\DesignPattern\Models;

use Curso\DesignPattern\contracts\Budgettable;
use Curso\DesignPattern\Models\BudgetStatuses\BudgetStatus;
use Curso\DesignPattern\Models\BudgetStatuses\OnApproval;

class Budget implements Budgettable
{
    public float $value;
    public int $itemsQuantity;
    public BudgetStatus $status;
    private array $items;

    public function __construct()
    {
        $this->status = new OnApproval();
        $this->items = [];
    }

    public function applyExtraDiscount(): float
    {
        return $this->value -= $this->status->calculateExtraDiscount($this);
    }

    public function approve(): void
    {
        $this->status->approve($this);
    }

    public function reprove(): void
    {
        $this->status->reprove($this);
    }

    public function addItem(Budgettable $budgetItem): void
    {
        $this->items[] = $budgetItem;
    }

    public function value(): float
    {
        return array_reduce(
            array: $this->items,
            callback: fn (float $total, Budgettable $budgetItem) => $budgetItem->value() + $total,
            initial: 0
        );
    }
}