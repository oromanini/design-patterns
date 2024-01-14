<?php

namespace Curso\DesignPattern\Models\BudgetStatuses;

use Curso\DesignPattern\Models\Budget;

class OnApproval extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget): void
    {
        $budget->status = new Approved();
    }

    public function reprove(Budget $budget): void
    {
        $budget->status = new Reproved();
    }
}