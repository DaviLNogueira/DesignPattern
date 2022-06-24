<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido):void{

        echo "Salvando Pedido no banco de template";
    }
}