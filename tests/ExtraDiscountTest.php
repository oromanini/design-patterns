<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\BudgetStatuses\Approved;
use Curso\DesignPattern\Models\BudgetStatuses\Finished;
use Curso\DesignPattern\Models\BudgetStatuses\OnApproval;
use Curso\DesignPattern\Models\BudgetStatuses\Reproved;
use PHPUnit\Framework\TestCase;

class ExtraDiscountTest extends TestCase
{
    private Budget $budget;

    protected function setUp(): void
    {
        parent::setUp();
        $this->budget = new Budget();
        $this->budget->value = 1000;
    }

    public function testExtraDiscount_WithOnApprovalBudget_ShouldApplyDiscount(): void
    {
        $this->budget->status = new OnApproval();

        $this->assertEquals(
            expected: 950,
            actual: $this->budget->applyExtraDiscount()
        );
    }

    public function testExtraDiscount_WithApprovedBudget_ShouldApplyDiscount(): void
    {
        $this->budget->status = new Approved();

        $this->assertEquals(
            expected: 980,
            actual: $this->budget->applyExtraDiscount()
        );
    }

    public function testExtraDiscount_WithReprovedBudget_ShouldNotApplyDiscount(): void
    {
        $this->budget->status = new Reproved();

        $this->expectException(\DomainException::class);

        $this->assertEquals(
            expected: 1000,
            actual: $this->budget->applyExtraDiscount()
        );
    }

    public function testExtraDiscount_WithFinishedBudget_ShouldNotApplyDiscount(): void
    {
        $this->budget->status = new Finished();

        $this->expectException(\DomainException::class);

        $this->assertEquals(
            expected: 1000,
            actual: $this->budget->applyExtraDiscount()
        );
    }
}