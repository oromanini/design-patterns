<?php

namespace Curso\DesignPattern\Models;

use ArrayIterator;
use Curso\DesignPattern\Models\BudgetStatuses\Finished;
use IteratorAggregate;

class BudgetList implements IteratorAggregate
{
    /** @var Budget[] */
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget): void
    {
        $this->budgets[] = $budget;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->budgets);
    }

    public function finishedBudgets(): array
    {
        return array_filter(
            $this->budgets,
            fn (Budget $budget) => $budget->status instanceof Finished
        );
    }
}