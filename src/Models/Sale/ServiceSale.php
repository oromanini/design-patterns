<?php

namespace Curso\DesignPattern\Models\Sale;

class ServiceSale extends Sale
{
    public function __construct(private readonly string $service_person)
    {}
}