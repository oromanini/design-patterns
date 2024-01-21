<?php

namespace Curso\DesignPattern\log;

interface Logger
{
    public function log(string $formattedMessage);
}