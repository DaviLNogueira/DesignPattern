<?php

namespace Alura\DesignPattern;

class itemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        return $this->valor;
    }
}