<?php

namespace usuario\V1\Rest\Biometria;

/**
 * Description of BiometriaMapper
 *
 * @author Diego
 */

use Laminas\Db\TableGateway\AbstractTableGateway;
use usuario\V1\Rest\Biometria\Abstracts\ABiometriaMapper;

class BiometriaMapper extends ABiometriaMapper
{
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function delete(int $id)
    {
        
    }

    public function fetch(int $id)
    {
        $resultSet = $this->tableGateway->select(array('int'=>$id));
         return $resultSet;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
         return $resultSet;
    }

    public function save()
    {

    }
}