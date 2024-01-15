<?php

require_once 'vendor/autoload.php';

use Curso\DesignPattern\Services\OrderGeneratorCommand;
use Curso\DesignPattern\Services\OrderGeneratorHandler;

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$command = new OrderGeneratorCommand(
    $budgetValue,
    $itemsQuantity,
    $clientName
);

$commandHandler = new OrderGeneratorHandler();
$commandHandler->execute($command);