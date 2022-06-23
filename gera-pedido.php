<?php

// todas as strings passadas por linha de comando serão amarzenadas no array argv
use Alura\DesignPattern\{AcoesAoGerarPedido\CriarPedidoNoBanco,
    AcoesAoGerarPedido\EnviarPedidoPorEmail,
    AcoesAoGerarPedido\LogGerarPedido,
    GerarPedido,
    GerarPedidoHandler,
    Orcamento,
    Pedido};

require_once 'vendor/autoload.php';

$valorOrcamento =  $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente  = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento,$numeroDeItens,$nomeCliente);
$gerarPedidoHander = new GerarPedidoHandler();
$gerarPedidoHander -> attach(new EnviarPedidoPorEmail());
$gerarPedidoHander -> attach(new CriarPedidoNoBanco());
$gerarPedidoHander -> attach(new LogGerarPedido());

$gerarPedidoHander -> execute($gerarPedido);

