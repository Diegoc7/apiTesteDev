<?php

namespace usuario\Ferramentas;

/**
 * Description of Arquivo
 *
 * @author Diego
 */
class Arquivo
{
    private $arquivo;
    private $destino;

    public function __construct(array $arquivo, $destino)
    {
        $this->arquivo = $arquivo;

        if (!is_dir($destino)) {
            @mkdir($destino, 0777, true);
        }
        $nomeOriginal  = $arquivo["name"];
        $nomeFinal     = md5($nomeOriginal.date("dmYHis"));
        $this->destino = $destino.DIRECTORY_SEPARATOR.$nomeFinal.'.wsq';
    }

    public function mover()
    {
        if (!is_writeable($this->destino)) {
//    echo 'Can\'t write to directory, insufficient permissions.';
        }
        $rt = move_uploaded_file($_FILES['arquivo']['tmp_name'], $this->destino);
        touch($this->destino);
        return $this->destino;
    }
}