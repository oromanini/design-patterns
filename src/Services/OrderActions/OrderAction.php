<?php

namespace Curso\DesignPattern\Services\OrderActions;

use Curso\DesignPattern\Models\Order;

interface OrderAction
{
    public function execute(Order $order): void;
}