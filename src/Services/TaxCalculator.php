<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Taxes\Tax;

class TaxCalculator
{
    public function calculateTax(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }

}