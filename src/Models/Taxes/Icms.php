<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}