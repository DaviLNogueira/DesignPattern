<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto; // sempre que um parametro pode ser não passado ou nulo, deve colocar uma interrogação

    public function __construct(Imposto $outroImposto = null) // uma parametro não obrigatório
    {

        $this->outroImposto = $outroImposto;
    }

    abstract protected  function realizacaCalculoEspecifico(Orcamento  $orcamento): float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this -> realizacaCalculoEspecifico($orcamento) + $this->realizacaCalculoDeOutroImposto($orcamento);
    }

    private function realizacaCalculoDeOutroImposto(Orcamento $orcamento)
    {
        return $this -> outroImposto == null ? 0: $this->outroImposto -> calculaImposto($orcamento);
    }
}