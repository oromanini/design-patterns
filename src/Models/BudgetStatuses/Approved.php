<?php

namespace Curso\DesignPattern\Models\BudgetStatuses;

use Curso\DesignPattern\Models\Budget;

class Approved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget): void
    {
        $budget->status = new Finished();
    }
}