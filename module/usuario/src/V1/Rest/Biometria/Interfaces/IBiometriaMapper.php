<?php
namespace usuario\V1\Rest\Biometria\Interfaces;

/**
 *
 * @author Diego
 */
interface IBiometriaMapper
{
    public  function fetchAll();

    public  function fetch(int $id);

    public  function save();

    public  function delete(int $id);
}