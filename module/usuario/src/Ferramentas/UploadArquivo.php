<?php

namespace usuario\Ferramentas;

/**
 * Description of Arquivo
 *
 * @author Diego
 */
class UploadArquivo
{
    private $arquivo;
    private $destino;
    private $extensoes;

    public function __construct(array $arquivo, $destino,
                                array $extensoesPermitidas = array())
    {
        $this->arquivo   = $arquivo;
        $this->extensoes = $extensoesPermitidas;

        if (!is_dir($destino)) {
            @mkdir($destino, 0777, true);
        }
        $nomeOriginal  = $arquivo["name"];
        $nomeFinal     = md5($nomeOriginal.date("dmYHis"));
        $this->destino = $destino.DIRECTORY_SEPARATOR.$nomeFinal.'.'.$this->getExtensao();
    }

    private function getExtensao()
    {
        $partesNomeOriginal = explode('.', $this->arquivo['name']);
        return end($partesNomeOriginal);
    }

    private function validaExtensao()
    {
        if (empty($this->extensoes)) {
            return true;
        }


        if (!in_array($this->getExtensao(), $this->extensoes)) {
            throw new \Exception(sprintf("A extensão %s não é permitida",
                $this->getExtensao()));
        }
    }

    public function mover()
    {
        $this->validaExtensao();
        $conteudo = file_get_contents($_FILES['arquivo']['tmp_name']);

        $enviado = file_put_contents($this->destino, $conteudo);

        if (!$enviado) {
            throw new \Exception(sprintf("Erro ao efetuar o upload do arquivo."));
        }

        return $this->destino;
    }
}