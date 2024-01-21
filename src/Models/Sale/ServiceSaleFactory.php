<?php

namespace Curso\DesignPattern\Models\Sale;

use Curso\DesignPattern\Models\Taxes\Iss;
use Curso\DesignPattern\Models\Taxes\Tax;

class ServiceSaleFactory implements SaleFactory
{
    public function __construct(private readonly string $servicePerson)
    {}

    public function createSale(): Sale
    {
        return new ServiceSale($this->servicePerson);
    }

    public function getTax(): Tax
    {
        return new Iss();
    }
}