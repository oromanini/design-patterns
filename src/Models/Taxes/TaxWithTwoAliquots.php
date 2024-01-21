<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

abstract class TaxWithTwoAliquots extends Tax
{

    public function calculateSpecificTax(Budget $budget): float
    {
        if ($this->shouldApplyMaximumTax($budget)) {
            return $this->calculateMaximumTax($budget);
        }

        return $this->calculateMinimumTax($budget);
    }

    abstract protected function shouldApplyMaximumTax(Budget $budget): bool;

    abstract protected function calculateMaximumTax(Budget $budget): float;

    abstract protected function calculateMinimumTax(Budget $budget): float;
}