<?php

namespace Curso\DesignPattern\Tests;

use Curso\DesignPattern\PdoConnection;
use PHPUnit\Framework\TestCase;

class PDOTest extends TestCase
{
    public function testPDO(): void
    {
        $pdo = PdoConnection::getInstance('sqlite::memory:');
        $pdo2 = PdoConnection::getInstance('sqlite::memory:');

        $this->assertSame($pdo, $pdo2);
    }
}