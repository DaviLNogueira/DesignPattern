<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    public ?Desconto $proximoDesconto; // interrogação no objeto significa que pode ser nulo
    public function __construct(?Desconto $proximoDesconto)
    {
        $this -> proximoDesconto = $proximoDesconto;
    }

    abstract public function calculaDesconto(Orcamento  $orcamento): float;
}