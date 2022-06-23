<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class SemDesconto extends  Desconto
{

    public function __construct()
    {
        parent::__construct(null); // sobreescreve a cadeia pai
    }

    public function  calculaDesconto(Orcamento $orcamento): float
    {
        return  0;
    }
}