<?php

namespace Curso\DesignPattern\Models\Sale;

class ProductSale extends Sale
{
    public function __construct(
        \DateTimeInterface $date,
        private readonly int $weight,
    ) {
        parent::__construct($date);
    }
}