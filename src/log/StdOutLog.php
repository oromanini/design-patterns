<?php

namespace Curso\DesignPattern\log;

class StdOutLog implements logger
{

    public function log(string $formattedMessage): void
    {
        echo $formattedMessage;
    }
}