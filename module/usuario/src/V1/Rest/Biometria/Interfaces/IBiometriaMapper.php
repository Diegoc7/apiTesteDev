<?php
namespace usuario\V1\Rest\Biometria\Interfaces;

/**
 *
 * @author Diego
 */
interface IBiometriaMapper
{
    public  function fetchAll($parametros = []);

    public  function fetch($id, $id_usuario);

    public  function save(array $entidade);

    public  function delete($id);
}