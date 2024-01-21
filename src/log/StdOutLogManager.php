<?php

namespace Curso\DesignPattern\log;

class StdOutLogManager extends LogManager
{

    function createLogger(): logger
    {
        return new StdOutLog();
    }
}