<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoCom2Aliquotas extends Imposto
{
    public function realizacaCalculoEspecifico(Orcamento $orcamento): float
    {

        if($this->deveAplicarTaxaMaxima($orcamento)){
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->culculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento):bool;
    abstract protected function calculaTaxaMaxima(Orcamento  $orcamento):float;
    abstract protected function culculaTaxaMinima(Orcamento $orcamento):float;
}