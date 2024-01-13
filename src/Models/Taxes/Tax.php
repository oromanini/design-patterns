<?php

namespace Curso\DesignPattern\Models\Taxes;

use Curso\DesignPattern\Models\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}