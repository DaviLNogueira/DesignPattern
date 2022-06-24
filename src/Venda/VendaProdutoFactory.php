<?php

namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Imposto;

class VendaProdutoFactory implements  VendaFactory
{
    private float $pesoProduto;

    public function __construct(float $pesoProduto)
    {

        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return  new VendaProduto(new \DateTimeImmutable(),$this ->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return  new Icms();
    }
}