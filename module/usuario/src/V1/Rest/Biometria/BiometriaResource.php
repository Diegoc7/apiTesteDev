<?php
namespace usuario\V1\Rest\Biometria;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\Rest\AbstractResourceListener;
use usuario\V1\Rest\Biometria\Abstracts\ABiometriaMapper;
class BiometriaResource extends AbstractResourceListener
{

    private $mapper;
    public function __construct(ABiometriaMapper $mapper)
    {
        $this->mapper = $mapper;
    }
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
      $destino = 'data'.DIRECTORY_SEPARATOR.'biometrias';

     $uploadArquivo = new \usuario\Ferramentas\Arquivo($this->getInputFilter()->getValue('arquivo'), $destino);
     $arquivo = $uploadArquivo->mover();

     $entidade = new BiometriaEntity();
     $entidade->setIdUsuario($this->getInputFilter()->getValue('id_usuario'));
     $entidade->setArquivo($arquivo);
     return $this->mapper->save(array($entidade));
     
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        
        $idUsuario = filter_input(INPUT_GET, 'id_usuario');
      return  $this->mapper->fetch((int)$id, (int) $idUsuario);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
      return $this->mapper->fetchAll($params);
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
