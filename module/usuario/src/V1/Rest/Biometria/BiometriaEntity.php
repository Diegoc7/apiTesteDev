<?php
namespace usuario\V1\Rest\Biometria;

use usuario\V1\Rest\Biometria\Abstracts\ABiometriaEntity;

class BiometriaEntity extends ABiometriaEntity
{
    private $id;
    private $id_usuario;
    private $arquivo;

    public function getArrayCopy()
    {
        return array(
            'id' => $this->id,
            'id_usuario' => $this->id_usuario,
            'arquivo' => $this->arquivo,
        );
    }

    public function exchangeArray(array $array)
    {
        $this->id         = isset($array['id']) ? $array['id'] : null;
        $this->id_usuario = isset($array['id_usuario']) ? $array['id_usuario'] : null;
        $this->arquivo    = isset($array['arquivo']) ? $array['arquivo'] : null;
    }

    function getId()
    {
        return $this->id;
    }

    function getIdUsuario()
    {
        return $this->id_usuario;
    }

    function getArquivo()
    {
        return $this->arquivo;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
        return $this;
    }




}