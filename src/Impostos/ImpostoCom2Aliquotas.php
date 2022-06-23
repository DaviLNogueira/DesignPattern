<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ImpostoCom2Aliquotas implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
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