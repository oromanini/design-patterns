<?php

namespace Curso\DesignPattern\reports;

use Curso\DesignPattern\Models\Budget;

class ExportedBudget implements ExportedContent
{

    public function __construct(private readonly Budget $budget)
    {
    }

    public function content(): array
    {
        return [
            'value' => $this->budget->value,
            'items_qty' => $this->budget->itemsQuantity,
        ];
    }
}