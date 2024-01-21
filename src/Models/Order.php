<?php

namespace Curso\DesignPattern\Models;

class Order
{
    public function __construct(private readonly OrderExtraInfo $extraInfo)
    {
    }

    public Budget $budget;

}