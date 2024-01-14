<?php

namespace Curso\DesignPattern\Models;

use Curso\DesignPattern\Models\BudgetStatuses\BudgetStatus;
use Curso\DesignPattern\Models\BudgetStatuses\OnApproval;

class Budget
{
    public float $value;
    public int $itemsQuantity;
    public BudgetStatus $status;

    public function __construct()
    {
        $this->status = new OnApproval();
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
}