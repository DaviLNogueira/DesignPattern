<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido):void{
        echo $pedido -> pedidoGerado -> nomeCliente;
        echo "Enviando e-mail de pedido gerado";
    }
}