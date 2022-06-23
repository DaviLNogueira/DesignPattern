<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe500reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5itens;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeDescontos
{


    public function calculaDescontos(Orcamento $orcamento) : float
    {

        //Irá realizar uma cadeia de descontos para chamando elas até que uma condição seja satisfeita
        $cadeiaDeDescontos = new DescontoMaisDe5itens(
            new DescontoMaisDe500reais(new SemDesconto()));

        return $cadeiaDeDescontos -> calculaDesconto($orcamento);
    }
}