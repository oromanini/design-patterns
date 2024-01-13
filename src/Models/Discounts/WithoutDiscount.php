<?php

namespace Curso\DesignPattern\Models\Discounts;

use Curso\DesignPattern\Models\Budget;

class WithoutDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}