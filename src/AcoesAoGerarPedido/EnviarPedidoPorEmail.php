<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido):void{
        echo $pedido -> pedidoGerado -> nomeCliente;
        echo "Enviando e-mail de pedido gerado";
    }
}