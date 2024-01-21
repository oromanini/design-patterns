<?php

namespace Curso\DesignPattern\Models\Sale;

use Curso\DesignPattern\Models\Taxes\Tax;

interface SaleFactory
{
    public function createSale(): Sale;
    public function getTax(): Tax;
}