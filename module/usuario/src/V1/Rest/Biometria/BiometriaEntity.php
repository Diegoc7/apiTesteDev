<?php
namespace usuario\V1\Rest\Biometria;

use usuario\V1\Rest\Biometria\Interfaces\IBiometriaEntity;
class BiometriaEntity implements IBiometriaEntity
{

    public $id;
    public $id_usuario;
    public $arquivo;

    public function getArrayCopy(){
	 return array(
            'id' => $this->id,
            'id_usuario' => $this->id_usuario,
            'arquivo' => $this->arquivo,
        );
    }

    public function exchangeArray(array $array){
	 $this->id    = $array['id'];
        $this->id_usuario  = $array['id_usuario'];
        $this->arquivo = $array['arquivo'];
    }
}
