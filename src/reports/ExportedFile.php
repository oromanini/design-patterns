<?php

namespace Curso\DesignPattern\reports;

interface ExportedFile
{
    public function save(ExportedContent $exportedContent): string;
}