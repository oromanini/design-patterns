<?php

namespace Curso\DesignPattern\Services;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Order;
use Curso\DesignPattern\Services\OrderActions\GenerateLogForOrder;
use Curso\DesignPattern\Services\OrderActions\OrderAction;
use Curso\DesignPattern\Services\OrderActions\SendOrderToEmail;
use Curso\DesignPattern\Services\OrderActions\StoreOrder;
use DateTime;

class OrderGeneratorHandler
{
    /** @var OrderAction[] */
    private array $actionsAfterOrder = [];

    public function execute(OrderGeneratorCommand $orderGeneratorCommand): void
    {
        $budget = new Budget();
        $budget->itemsQuantity = $orderGeneratorCommand->getItemsQuantity();
        $budget->value = $orderGeneratorCommand->getBudgetValue();

        $order = new Order();
        $order->finishDate = new DateTime();
        $order->clientName = $orderGeneratorCommand->getClientName();
        $order->budget = $budget;

        foreach ($this->actionsAfterOrder as $action) {
            $action->execute($order);
        }
    }

    public function addActionAfterOrder(OrderAction $orderAction): void
    {
        $this->actionsAfterOrder[] = $orderAction;
    }
}