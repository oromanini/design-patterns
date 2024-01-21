<?php

namespace Curso\DesignPattern;

use Curso\DesignPattern\contracts\Budgettable;
use Curso\DesignPattern\Models\Budget;

class BudgetCacheProxy extends Budget
{
    private float $cacheValue = 0;

    public function __construct(private readonly Budget $budget)
    {}

    public function addItem(Budgettable $budgetItem): void
    {
        throw new \DomainException('Não é possível adicionar item a orçamento em cache');
    }

    public function value(): float
    {
        if ($this->cacheValue == 0) {
            $this->cacheValue = $this->budget->value();
        }

        return $this->cacheValue;
    }
}