<?php

namespace Alura\DesignPattern;

class CachOrcanebtoProxy extends Orcamento
{
// faz com que interceptar ações
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;

    }

    public function addItem(Orcavel $item): void
    {
        throw new  \DomainException('Não é possível adicionar item a orçamento cache');
    }

    public function valor(): float
    {
        if($this -> valorCache == 0){
            $this -> valorCache = $this -> orcamento -> valor();
        }
        return $this->valorCache;
    }
}