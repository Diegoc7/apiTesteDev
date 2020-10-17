<?php

namespace usuario\V1\Rest\Biometria;

/**
 * Description of BiometriaMapper
 *
 * @author Diego
 */

use Laminas\Db\TableGateway\AbstractTableGateway;
use usuario\V1\Rest\Biometria\Abstracts\ABiometriaMapper;
use usuario\V1\Rest\Biometria\Exceptions\IdBiometriaInvalidoException;
use usuario\V1\Rest\Biometria\Exceptions\BiometriaNaoEncontradaException;
use Laminas\ApiTools\Doctrine\Server\Event\DoctrineResourceEvent;
class BiometriaMapper extends ABiometriaMapper
{
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function delete($id)
    {
        
    }

    public function fetch( $id)
    {
//        \Laminas\Authentication\Adapter\
//        phpinfo();
//        var_dump(info);exit;
        $this->validaIdBiometria($id);
        $resposta = $this->tableGateway->select(array('id'=>$id));
        $biometria = $resposta->current();
        if(!$biometria){
             throw new BiometriaNaoEncontradaException("Biometria não encontrada.");
        }
         return $biometria;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
         return $resultSet;
    }

    public function save()
    {

    }

    private function validaIdBiometria($id){
        if(!is_int($id) || ((int) $id) <= 0){
            throw new IdBiometriaInvalidoException("Parametro ID da Biometria invalido.");
        }
    }
}