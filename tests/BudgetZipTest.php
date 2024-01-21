<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\Models\Budget;
use Curso\DesignPattern\reports\ExportedBudget;
use Curso\DesignPattern\reports\ExportedXmlFile;
use Curso\DesignPattern\reports\ExportedZipFile;
use PHPUnit\Framework\TestCase;

class BudgetZipTest extends TestCase
{
    private Budget $budget;

    protected function setUp(): void
    {
        parent::setUp();
        $this->budget = new Budget();
        $this->budget->value = 1000;
        $this->budget->itemsQuantity = 10;
    }

    public function testXmlBudgetExport(): void
    {
        $exportedBudget = new ExportedBudget($this->budget);
        $xmlExportedBudget = new ExportedXmlFile('orcamento');

        $filePath = $xmlExportedBudget->save($exportedBudget);
        $this->assertFileExists($filePath, 'O arquivo não foi salvo.');
        $this->assertNotEmpty(file_get_contents($filePath), 'Arquivo vazio.');
    }

    public function testZipBudgetExport(): void
    {
        $exportedBudget = new ExportedBudget($this->budget);
        $xmlExportedBudget = new ExportedZipFile('orcamento');

        $filePath = $xmlExportedBudget->save($exportedBudget);
        $this->assertFileExists($filePath, 'O arquivo não foi salvo.');
        $this->assertNotEmpty(file_get_contents($filePath), 'Arquivo vazio.');
    }
}