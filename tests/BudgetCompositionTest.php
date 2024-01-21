<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\BudgetItem;
use PHPUnit\Framework\TestCase;

class BudgetCompositionTest extends TestCase
{
    public function testBudgetComposition_WithOldBudget_ShouldAssertTotal(): void
    {
        $budget = new Budget();
        $item = new BudgetItem(100);
        $item2 = new BudgetItem(100);

        $budget->addItem($item);
        $budget->addItem($item2);

        $oldBudget = new Budget();
        $item3 = new BudgetItem(100);
        $oldBudget->addItem($item3);

        $budget->addItem($oldBudget);

        $this->assertEquals(300, $budget->value());
    }
}