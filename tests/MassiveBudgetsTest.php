<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\Models\Order;
use Curso\DesignPattern\Models\OrderExtraInfo;
use PHPUnit\Framework\TestCase;

class MassiveBudgetsTest extends TestCase
{
    public function testMassiveBudgets(): void
    {
        $orders = [];

        $extraInfo = new OrderExtraInfo('oiasd', new \DateTime());

        for ($i = 0; $i < 10000; $i++) {
            $order = new Order($extraInfo);
            $order->budget = new Budget();
            $orders[] = $order;
        }

        $this->assertNotEmpty($orders);
    }
}