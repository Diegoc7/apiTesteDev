<?php
namespace usuario\V1\Rest\Biometria\Interfaces;
/**
 *
 * @author Diego Braga
 */
interface IBiometriaEntity
{
    public function getArrayCopy();
    
    public function exchangeArray(array $array);
}