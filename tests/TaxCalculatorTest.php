<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Taxes\Icms;
use Curso\DesignPattern\Models\Taxes\Iss;
use Curso\DesignPattern\Models\Taxes\Tax;
use Curso\DesignPattern\Services\TaxCalculator;
use Generator;
use PHPUnit\Framework\TestCase;

class TaxCalculatorTest extends TestCase
{
    public static function taxCalculatorScenarios(): Generator
    {
        yield "ICMS" => [
          "type" => new Icms(),
          "budgetValue" => 900,
          "expectedTax" => 90,
        ];
        yield "ISS" => [
            "type" => new Iss(),
            "budgetValue" => 1000,
            "expectedTax" => 60,
        ];
    }

    /** @dataProvider taxCalculatorScenarios */
    public function testTaxCalculator_withAllTaxTypes_ShouldAssertAsExpected(
        Tax $type,
        float $budgetValue,
        float $expectedTax
    ): void {
        $budget = new Budget();
        $budget->value = $budgetValue;

        $calculatedTax = (new TaxCalculator())
            ->calculateTax($budget, $type);

        $this->assertEquals(
            expected: $expectedTax,
            actual: $calculatedTax
        );
    }
}