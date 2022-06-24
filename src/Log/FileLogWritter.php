<?php

namespace Alura\DesignPattern\Log;

class FileLogWritter implements LogWritter
{
    private string $arquivo;
    /**
     * @var false|resource
     */
    private $arqivo;

    public function __construct(string $caminhoAquivo)
    {
        $this->arqivo = fopen($caminhoAquivo,'a+');
    }

    public function escreve(string $mensagemFormatada)
    {
        fwrite($this -> arqivo,$mensagemFormatada.PHP_EOL);
    }

    public function __destruct()
    {
        fclose($this -> arqivo);
    }
}