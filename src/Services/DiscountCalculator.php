<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Discounts\DiscountMoreThanFiveHundreds;
use Curso\DesignPattern\Models\Discounts\DiscountMoreThanFiveItems;
use Curso\DesignPattern\Models\Discounts\WithoutDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        $chain_of_discounts = new DiscountMoreThanFiveItems(
            new DiscountMoreThanFiveHundreds(
                new WithoutDiscount()
            )
        );

        $calculatedDiscount = $chain_of_discounts->calculateDiscount($budget);
        DiscountLogger::log($calculatedDiscount);

        return $chain_of_discounts->calculateDiscount($budget);
    }
}