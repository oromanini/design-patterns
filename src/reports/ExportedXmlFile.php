<?php

namespace Curso\DesignPattern\reports;

class ExportedXmlFile implements ExportedFile
{

    public function __construct(private readonly string $fatherElementName)
    {
    }

    public function save(ExportedContent $exportedContent): string
    {
        $xmlElement = new \SimpleXMLElement("<{$this->fatherElementName}/>");

        foreach ($exportedContent->content() as $item => $value) {
            $xmlElement->addChild($item, $value);
        }

        $filepath = tempnam(sys_get_temp_dir(), 'xml');
        $xmlElement->asXML($filepath);

        return $filepath;
    }
}