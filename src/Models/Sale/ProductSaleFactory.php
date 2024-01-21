<?php

namespace Curso\DesignPattern\Models\Sale;

use Curso\DesignPattern\Models\Taxes\Icms;
use Curso\DesignPattern\Models\Taxes\Tax;

class ProductSaleFactory implements SaleFactory
{
    public function __construct(private readonly int $productWeight)
    {
    }

    public function createSale(): Sale
    {
        return new ProductSale(new \DateTime(), $this->productWeight);
    }

    public function getTax(): Tax
    {
        return new Icms();
    }
}