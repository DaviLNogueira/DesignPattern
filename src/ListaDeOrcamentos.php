<?php

namespace Alura\DesignPattern;


use Traversable;

class ListaDeOrcamentos implements  \IteratorAggregate // classe que reconhece que um array é percorrivel
{
    /**@var Orcamento[]*/
    private array $orcamentos ;

    public function __construct()
    {
        $this -> orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento): void
    {
        $this -> orcamentos[] = $orcamento;
    }

    public function orcamentos():array
    {
        return  $this->orcamentos;
    }

    public function getIterator(): Traversable
    {
        return  new \ArrayIterator($this->orcamentos); // retorna no array algo que é percorrivel
    }
}