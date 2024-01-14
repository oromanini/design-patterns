<?php

namespace Curso\DesignPattern\Models\BudgetStatuses;

use Curso\DesignPattern\Models\Budget;

class Reproved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto');
    }

    public function finish(Budget $budget): void
    {
        $budget->status = new Finished();
    }
}