<?php

namespace Curso\DesignPattern\Http;

class ReactPhpHttpAdapter implements HttpAdapter
{

    #[\Override] public function post(string $url, array $data = []): void
    {
        //instanciar o react php
        //preparar os dados
        //fazer a requisicao

        echo 'ReactPHP';
    }
}