<?php

namespace Alura\DesignPattern\Venda;

abstract class Venda
{
    public \DateTimeImmutable $datarealizacao;

    public function __construct(\DateTimeInterface $datarealizacao)
    {

        $this->datarealizacao = $datarealizacao;
    }
}