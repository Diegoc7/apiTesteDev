<?php
namespace usuario\V1\Rest\Endereco;

class EnderecoResourceFactory
{
    public function __invoke($services)
    {
        return new EnderecoResource();
    }
}
