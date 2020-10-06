<?php
namespace usuario\V1\Rest\Biometria;

class BiometriaResourceFactory
{
    public function __invoke($services)
    {
	$mapper = $services->get('usuario\V1\Rest\Biometria\BiometriaMapper');
        return new BiometriaResource($mapper);
    }
}
