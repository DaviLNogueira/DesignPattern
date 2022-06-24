<?php

namespace Alura\DesignPattern\Venda;

class VendaServico extends Venda
{
    public string $nomePrestador;

    public function __construct(\DateTimeInterface $datarealizacao, string $nomePrestador)
    {
        parent::__construct($datarealizacao);

        $this->nomePrestador = $nomePrestador;
    }
}