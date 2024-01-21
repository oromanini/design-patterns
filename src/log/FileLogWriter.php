<?php

namespace Curso\DesignPattern\log;

class FileLogWriter implements Logger
{
    private $file;

    public function __construct(string $filePath)
    {
        $this->file = fopen($filePath, 'a+');
    }

    public function log(string $formattedMessage): void
    {
        fwrite($this->file, $formattedMessage . PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}