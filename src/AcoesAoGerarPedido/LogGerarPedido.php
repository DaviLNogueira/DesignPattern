<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

class LogGerarPedido implements \SplObserver
{
    public function update(\SplSubject $pedido):void{
        echo "Gerando log de geração de pedido";
    }
}