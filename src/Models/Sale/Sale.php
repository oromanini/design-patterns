<?php

namespace Curso\DesignPattern\Models\Sale;

abstract class Sale
{
    public function __construct(private readonly \DateTimeInterface $date)
    {}
}