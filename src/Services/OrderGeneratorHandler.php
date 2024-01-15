<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Order;

class OrderGeneratorHandler
{
    public function __construct()
    {
    }

    public function execute(OrderGeneratorCommand $orderGeneratorCommand): void
    {
        $budget = new Budget();
        $budget->itemsQuantity = $orderGeneratorCommand->getItemsQuantity();
        $budget->value = $orderGeneratorCommand->getBudgetValue();

        $order = new Order();
        $order->finishDate = new DateTime();
        $order->clientName = $orderGeneratorCommand->getClientName();
        $order->budget = $budget;

        //OrderRepository
        echo "Criar pedido no banco de dados " .PHP_EOL;
        //MailService
        echo "Envia e-mail para o cliente " .PHP_EOL;
    }
}