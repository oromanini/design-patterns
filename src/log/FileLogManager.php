<?php

namespace Curso\DesignPattern\log;

class FileLogManager extends LogManager
{
    public function __construct(private readonly string $filepath)
    {
    }

    public function createLogger(): Logger
    {
        return new FileLogWriter($this->filepath);
    }
}