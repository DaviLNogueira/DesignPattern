<?php

// todas as strings passadas por linha de comando serão amarzenadas no array argv
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
require_once 'vendor/autoload.php';

$valorOrcamento =  $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente  = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento,$numeroDeItens,$nomeCliente);
$gerarPedidoHander = new \Alura\DesignPattern\GerarPedidoHandler();
$gerarPedidoHander -> execute($gerarPedido);

