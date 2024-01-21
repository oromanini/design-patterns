<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Sale\ServiceSaleFactory;
use Curso\DesignPattern\Models\Taxes\Tax;
use PHPUnit\Framework\TestCase;

class SaleTest extends TestCase
{
    public function testSale(): void
    {
        $saleFactory = new ServiceSaleFactory('Oscar Romanini');
        $sale = $saleFactory->createSale();
        $tax = $saleFactory->getTax();

        $this->assertNotEmpty($sale);
        $this->assertNotEmpty($tax);
        $this->assertInstanceOf(Tax::class, $tax);
    }

}