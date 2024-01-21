<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\log\FileLogManager;
use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{
    public function testTaxCalculator_withAllTaxTypes_ShouldAssertAsExpected(): void {
        $logManager = new FileLogManager(__DIR__ . '/log');
        $logManager->log('info', 'Test log manager');

    }
}