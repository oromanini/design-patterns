<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

class Pis extends TaxWithTwoAliquots
{
    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}