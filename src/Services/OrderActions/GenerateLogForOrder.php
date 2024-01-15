<?php

namespace Curso\DesignPattern\Services\OrderActions;

use Curso\DesignPattern\Models\Order;

class GenerateLogForOrder implements OrderAction
{
    public function execute(Order $order): void
    {
        echo "Salvando pedido no banco de dados";
    }
}