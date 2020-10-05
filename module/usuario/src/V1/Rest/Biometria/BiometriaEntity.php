<?php
namespace usuario\V1\Rest\Biometria;

use usuario\V1\Rest\Biometria\Interfaces\IBiometriaEntity;
class BiometriaEntity implements IBiometriaEntity
{

    public $id;
    public $id_usuario;
    public $arquivo;

    public function getArrayCopy(){
	
    }

    public function exchangetArray(){
	
    }
}
