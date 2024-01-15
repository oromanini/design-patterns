<?php

namespace Curso\DesignPattern\Models;

class Order
{
    public string $clientName;
    public \DateTime $finishDate;
    public Budget $budget;
}