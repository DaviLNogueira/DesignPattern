<?php

namespace Alura\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem) : void
    {
        $logWritter = $this -> criarLogWritter();

        $dataHoje = date('d/m/Y');
        $mensagem = "[$dataHoje][$severidade] : $mensagem";
        $logWritter -> escreve($mensagem);

    }

    abstract  function  criarLogWritter() : LogWritter;
}