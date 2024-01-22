<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\BudgetItem;
use Curso\DesignPattern\Models\Invoice\Invoice;
use Curso\DesignPattern\Models\Invoice\ProductInvoiceBuilder;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    private Invoice $invoice;

    protected function setUp(): void
    {
        parent::setUp();
        $invoiceBuilder = (new ProductInvoiceBuilder());
        $this->invoice = $invoiceBuilder->forCompanies('00.00.000/0001-10', 'Oscar SA')
            ->withItem(new BudgetItem(15))
            ->withItem(new BudgetItem(20))
            ->withItem(new BudgetItem(25))
            ->withObservations('Essa nota fiscal é um teste!')
            ->withEmissionDate(new \DateTime('2023-01-01'))
            ->build();
    }

    public function testInvoice(): void
    {
        $this->assertInstanceOf(Invoice::class, $this->invoice);
        $this->assertEquals(60, $this->invoice->value());
        $this->assertEquals(6, $this->invoice->taxValue);
        $this->assertEquals(new \DateTime('2023-01-01'), $this->invoice->emissionDate);
    }

    public function testInvoiceClone(): void
    {
        $invoice2 = clone $this->invoice;
        $this->assertEquals(
            expected: (new \DateTime())->format('d-m-Y'),
            actual: $invoice2->emissionDate->format('d-m-Y'));
    }
}