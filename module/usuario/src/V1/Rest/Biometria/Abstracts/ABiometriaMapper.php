<?php
namespace usuario\V1\Rest\Biometria\Abstracts;
/**
 * Description of ABiometriaMapper
 *
 * @author Diego
 */
use usuario\V1\Rest\Biometria\Interfaces\IBiometriaMapper;
//use usuario\V1\Rest\Biometria\BiometriaEntity;
abstract class ABiometriaMapper implements IBiometriaMapper
{
    public abstract function fetchAll($parametros = []);

    public abstract function fetch($id, $id_usuario);

    public abstract function save(array $entidade);

    public abstract function delete($id);
}