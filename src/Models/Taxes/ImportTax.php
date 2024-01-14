<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

class ImportTax extends TaxWithTwoAliquots
{
    protected function shouldApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itemsQuantity > 3;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}