<?php

require_once 'vendor/autoload.php';

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\BudgetList;
use Curso\DesignPattern\Models\BudgetStatuses\Approved;
use Curso\DesignPattern\Models\BudgetStatuses\Reproved;

$budget1 = new Budget();
$budget1->value = 1000;
$budget1->itemsQuantity = 5;
$budget1->status = new Approved();

$budget2 = new Budget();
$budget2->value = 500;
$budget2->itemsQuantity = 3;
$budget2->status = new Reproved();

$budget3 = new Budget();
$budget3->value = 2000;
$budget3->itemsQuantity = 24;
$budget3->status = new Approved();

$budgetList = new BudgetList();
$budgetList->addBudget($budget1);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);

foreach ($budgetList as $budget) {
    echo "Valor: " . $budget->value . PHP_EOL;
    echo "Status: " . get_class($budget->status) . PHP_EOL;
    echo "Qtd. Itens: " . $budget->itemsQuantity . PHP_EOL;
}