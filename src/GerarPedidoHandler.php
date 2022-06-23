<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct() //PedidoRepositoty, MailService
    {

    }

    public function execute(GerarPedido  $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento -> quantidadeItens = $gerarPedido -> getNumeroItens();
        $orcamento -> valor = $gerarPedido ->getValorOrcamento();

        $pedido = new Pedido();
        $pedido -> dataFinalizacao = new \DateTimeImmutable(); // colocar a hora de hoje;
        $pedido -> nomeCliente = $gerarPedido ->getNomeCliente();
        $pedido -> orcamento = $orcamento;

        //Pedido Repository
        echo "Cria pedido no banco de dados".PHP_EOL;
        // Email Service
        echo "Envia e-mail para cliente".PHP_EOL;

    }
}