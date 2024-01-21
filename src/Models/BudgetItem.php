<?php

namespace Curso\DesignPattern\Models;

use Curso\DesignPattern\contracts\Budgettable;

class BudgetItem implements Budgettable
{
    public function __construct(public readonly float $value)
    {}

    public function value(): float
    {
        return $this->value;
    }
}