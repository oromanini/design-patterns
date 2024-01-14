<?php

namespace Curso\DesignPattern\Models\BudgetStatuses;

use Curso\DesignPattern\Models\Budget;
use DomainException;

abstract class BudgetStatus
{
    /*** @throws DomainException */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approve(Budget $budget): void
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }

    public function reprove(Budget $budget): void
    {
        throw new \DomainException('Este orçamento não pode ser aprovado');
    }
}