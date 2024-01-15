<?php

namespace Curso\DesignPattern\Services\OrderActions;

use Curso\DesignPattern\Models\Order;

class SendOrderToEmail implements OrderAction
{
    public function execute(Order $order): void
    {
        echo "Enviando pedido gerado por email" . PHP_EOL;
    }
}