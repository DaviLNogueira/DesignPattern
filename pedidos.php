<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido\CriadorDePedido;
use Alura\DesignPattern\Pedido\Pedido;
use Alura\DesignPattern\Pedido\TemplatePedido;

require_once 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();
for($i = 0; $i < 100000; $i ++){
    $orcamento = new Orcamento();
    $pedido = $criadorPedido -> criaPedido('Davi Lima ', date('Y-m-d'), $orcamento);


    $pedidos[] = $pedido;

}

echo memory_get_peak_usage(); //retorna o pico de memoria utilizado