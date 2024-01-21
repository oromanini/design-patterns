<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

class Iss extends Tax
{
    public function calculateSpecificTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}