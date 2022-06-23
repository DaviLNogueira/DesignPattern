<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido):void{

        echo "Salvando Pedido no banco de dados";
    }
}