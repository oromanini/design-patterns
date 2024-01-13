<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Services\DiscountCalculator;
use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    public static function budgetProvider(): \Generator
    {
        yield "10 items" => [
            "items" => 10,
            "expected" => 30,
            "value" => 300
        ];
        yield "3 items" => [
            "items" => 3,
            "expected" => 0,
            "value" => 300
        ];
        yield ">500" => [
            "items" => 3,
            "expected" => 30,
            "value" => 600
        ];
    }

    /** @dataProvider budgetProvider */
    public function testCalculateDiscount(
        int $items,
        float $expected,
        float $value
    ): void
    {
        $budget = new Budget();
        $budget->value = $value;
        $budget->itemsQuantity = $items;

        $discount = (new DiscountCalculator())
            ->calculateDiscount($budget);

        $this->assertEquals(
            expected: $expected,
            actual: $discount
        );
    }
}