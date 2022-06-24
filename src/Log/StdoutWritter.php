<?php

namespace Alura\DesignPattern\Log;

class StdoutWritter implements  LogWritter
{

    public function escreve(string $mensagemFormatada)
    {
        echo $mensagemFormatada;
    }
}