<?php

namespace usuario\V1\Rest\Biometria\Abstracts;

/**
 * Description of ABiometriaEntity
 *
 * @author Diego
 */
use usuario\V1\Rest\Biometria\Interfaces\IBiometriaEntity;
abstract class ABiometriaEntity implements IBiometriaEntity
{
    public abstract function getArrayCopy();

    public abstract function exchangeArray(array $array);
}