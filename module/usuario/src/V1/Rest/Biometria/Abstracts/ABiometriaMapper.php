<?php
namespace usuario\V1\Rest\Biometria\Abstracts;
/**
 * Description of ABiometriaMapper
 *
 * @author Diego
 */
use usuario\V1\Rest\Biometria\Interfaces\IBiometriaMapper;
abstract class ABiometriaMapper implements IBiometriaMapper
{
    public abstract function fetchAll();

    public abstract function fetch(int $id);

    public abstract function save();

    public abstract function delete(int $id);
}