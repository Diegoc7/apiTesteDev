<?php
namespace usuario\V1\Rest\Biometria;


use Laminas\Db\TableGateway\TableGateway;
class BiometriaResourceFactory
{
    public function __invoke($services)
    {
	$table = new TableGateway($table, $adapter);
        return new BiometriaResource();
    }
}
