<?php
namespace usuario\V1\Rest\Telefones;

class TelefonesResourceFactory
{
    public function __invoke($services)
    {
        return new TelefonesResource();
    }
}
