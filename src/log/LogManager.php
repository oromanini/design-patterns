<?php

namespace Curso\DesignPattern\log;

abstract class LogManager
{
    public function log(string $severity, string $message): void
    {
        $logger = $this->createLogger();

        $date = 'd/m/Y';
        $formattedMessage = "[$date][$severity]: $message";
        $logger->log($formattedMessage);
    }

    abstract function createLogger(): logger;
}