<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\BudgetItem;
use Curso\DesignPattern\Models\Invoice\Invoice;
use Curso\DesignPattern\Models\Invoice\ProductInvoiceBuilder;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    public function testInvoice(): void
    {
        $invoiceBuilder = (new ProductInvoiceBuilder());
        $invoice = $invoiceBuilder->forCompanies('00.00.000/0001-10', 'Oscar SA')
            ->withItem(new BudgetItem(15))
            ->withItem(new BudgetItem(20))
            ->withItem(new BudgetItem(25))
            ->withObservations('Essa nota fiscal é um teste!')
            ->withEmissionDate(new \DateTime())
            ->build();

        $this->assertInstanceOf(Invoice::class, $invoice);
        $this->assertEquals(60, $invoice->value());
        $this->assertEquals(6, $invoice->taxValue);
    }
}