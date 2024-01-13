<?php

namespace Curso\DesignPattern\Models\Discounts;

use Curso\DesignPattern\Models\Budget;

class DiscountMoreThanFiveHundreds extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}