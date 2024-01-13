<?php

namespace Curso\DesignPattern\Models\Discounts;

use Curso\DesignPattern\Models\Budget;

class DiscountMoreThanFiveItems extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}