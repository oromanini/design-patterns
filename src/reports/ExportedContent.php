<?php

namespace Curso\DesignPattern\reports;

interface ExportedContent
{
    public function content(): array;
}