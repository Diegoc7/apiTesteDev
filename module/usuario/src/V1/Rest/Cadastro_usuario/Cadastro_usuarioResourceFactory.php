<?php
namespace usuario\V1\Rest\Cadastro_usuario;

class Cadastro_usuarioResourceFactory
{
    public function __invoke($services)
    {
        return new Cadastro_usuarioResource();
    }
}
