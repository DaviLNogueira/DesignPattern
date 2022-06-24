<?php

namespace Alura\DesignPattern\Venda;

class VendaProduto extends Venda
{
    private float $pesoProduto;

    public function __construct(\DateTimeInterface $datarealizacao, float $pesoProduto)
    {

        parent::__construct($datarealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}