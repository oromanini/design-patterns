<?php

namespace Curso\DesignPattern\Services;

class DiscountLogger
{
    public static function log(float $calculatedDiscount): void
    {
        echo "Total de descontos = {$calculatedDiscount}";
    }
}