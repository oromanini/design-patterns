<?php

namespace Curso\DesignPattern\Models\Discounts;

use Curso\DesignPattern\Models\Budget;

abstract class Discount
{
    protected ?Discount $nextDiscount;

    public function __construct(?Discount $nextDiscount)
    {
        $this->nextDiscount = $nextDiscount;
    }

    abstract public function calculateDiscount(Budget $budget): float;
}