<?php
namespace usuario\V1\Rpc\Cadastrar;

class CadastrarControllerFactory
{
    public function __invoke($controllers)
    {
        return new CadastrarController();
    }
}
