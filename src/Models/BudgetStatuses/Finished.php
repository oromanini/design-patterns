<?php

namespace Curso\DesignPattern\Models\BudgetStatuses;

use Curso\DesignPattern\Models\Budget;

class Finished extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto');
    }
}