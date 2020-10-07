<?php
namespace usuario\V1\Rest\Biometria\Interfaces;

/**
 *
 * @author Diego
 */
interface IBiometriaMapper
{
    public  function fetchAll();

    public  function fetch($id);

    public  function save();

    public  function delete($id);
}