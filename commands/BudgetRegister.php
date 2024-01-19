<?php


use Curso\DesignPattern\Http\CurlHttpAdapter;
use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Services\BudgetRegister;

require 'vendor/autoload.php';

$budgetRegister = new BudgetRegister(new CurlHttpAdapter());
$budgetRegister->register(new Budget());