<?php

namespace Curso\DesignPattern\Models\Invoice;

class ProductInvoiceBuilder extends InvoiceBuilder
{
    public function build(): Invoice
    {
        $value = $this->invoice->value();
        $this->invoice->taxValue = $value * 0.1;

        return $this->invoice;
    }
}