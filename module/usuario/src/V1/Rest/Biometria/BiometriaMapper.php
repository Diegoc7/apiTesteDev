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
use usuario\V1\Rest\Biometria\Interfaces\IBiometriaEntity;
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

    public function fetch($id, $id_usuario)
    {
        $this->validaIdBiometria($id);
        $resposta = $this->tableGateway->select(array('id'=>$id, 'id_usuario' => $id_usuario));
        $biometria = $resposta->current();
        if(!$biometria){
             throw new BiometriaNaoEncontradaException("Biometria não encontrada.");
        }
         return $biometria;
    }

    public function fetchAll($parametros = [])
    {
        $resultSet = $this->tableGateway->select($parametros);
         return $resultSet;
    }

    public function save(array $dados)
    {
        $retornos = array();
        foreach ($dados as $entidade){
            if(!$entidade instanceof IBiometriaEntity){
                continue;
            }
           $retornos[] = $entidade->getId() > 0 ? $this->tableGateway->update($entidade->getArrayCopy()) : $this->tableGateway->insert($entidade->getArrayCopy());

//            $entidade->getArrayCopy();
        }
        return $retornos;
//        $this->tableGateway->insert($dados);
//        $this->tableGateway->update($dados);
    }

    private function validaIdBiometria($id){
        if(!is_int($id) || ((int) $id) <= 0){
            throw new IdBiometriaInvalidoException("Parametro ID da Biometria invalido.");
        }
    }
}