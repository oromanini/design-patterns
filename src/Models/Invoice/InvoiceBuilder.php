<?php

namespace Curso\DesignPattern\Models\Invoice;

use Curso\DesignPattern\Models\BudgetItem;

abstract class InvoiceBuilder
{
    public function __construct(
        protected readonly Invoice $invoice = new Invoice()
    ) {
        $this->invoice->emissionDate = new \DateTime();
    }

    public function forCompanies(string $cnpj, string $companyName): InvoiceBuilder
    {
        $this->invoice->cnpj = $cnpj;
        $this->invoice->companyName = $companyName;

        return $this;
    }

    public function withItem(BudgetItem $item): InvoiceBuilder
    {
        $this->invoice->items[] = $item;

        return $this;
    }

    public function withObservations(string $obs): InvoiceBuilder
    {
        $this->invoice->observations = $obs;

        return $this;
    }

    public function withEmissionDate(\DateTimeInterface $date): InvoiceBuilder
    {
        $this->invoice->emissionDate = $date;

        return $this;
    }

    abstract function build(): Invoice;
}