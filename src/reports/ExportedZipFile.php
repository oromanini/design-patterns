<?php

namespace Curso\DesignPattern\reports;

use ZipArchive;

class ExportedZipFile implements ExportedFile
{
    public function __construct(private readonly string $internalFileName)
    {}

    public function save(ExportedContent $exportedContent): string
    {
        $filepath = tempnam(sys_get_temp_dir(), 'zip');
        $zipFile = new ZipArchive();
        $zipFile->open($filepath);
        $zipFile->addFromString($this->internalFileName, serialize($exportedContent));
        $zipFile->close();

        return $filepath;
    }
}