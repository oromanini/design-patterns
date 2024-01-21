<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

abstract class Tax
{
    public function __construct(private readonly ?Tax $tax = null)
    {}

    abstract protected function calculateSpecificTax(Budget $budget): float;

    public function calculateTax(Budget $budget): float {
        return $this->calculateSpecificTax($budget)
            + $this->calculateSecondaryTax($budget);
    }

    private function calculateSecondaryTax(Budget $budget): float
    {
        return $this->tax == null
            ? 0
            : $this->tax->calculateTax($budget);
    }

}