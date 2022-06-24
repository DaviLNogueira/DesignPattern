<?php

use Alura\DesignPattern\Venda\VendaProdutoFactory;
use Alura\DesignPattern\Venda\VendaSericoFactory;

require_once 'vendor/autoload.php';

$fabricaVenda = new VendaSericoFactory("davi");
$venda = $fabricaVenda -> criarVenda();
$imposto = $fabricaVenda ->imposto();

var_dump($venda);
var_dump($imposto);