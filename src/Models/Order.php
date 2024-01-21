<?php

namespace Curso\DesignPattern\Models;

class Order
{
    public Budget $budget;

    public function __construct(private readonly OrderExtraInfo $extraInfo)
    {}

    public function getExtraInfo(): OrderExtraInfo
    {
        return $this->extraInfo;
    }

}