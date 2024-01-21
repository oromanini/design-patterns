<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

class Icms extends Tax
{
    public function calculateSpecificTax(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}