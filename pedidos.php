<?php

use Alura\DesignPattern\DadosExtrinscosPedidos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require_once 'vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtrinscosPedidos();
$dados -> dataFinalizacao =  new  \DateTimeImmutable();
$dados -> nomeCliente = md5('Davi');
for($i = 0; $i < 100000; $i ++){
    $pedido = new Pedido();
    $pedido -> dados = $dados;
    $pedido -> orcamento = new Orcamento();

    $pedidos[] = $pedido;

}

echo memory_get_peak_usage(); //retorna o pico de memoria utilizado