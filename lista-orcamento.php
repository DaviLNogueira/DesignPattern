<?php

require_once  'vendor/autoload.php';

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

$listaOrcamento = [];

$orcamento = new Orcamento();
$orcamento -> quantidadeItens = 7;
$orcamento -> aprova();
$orcamento -> valor = 1500.75;

$orcamento1 = new Orcamento();
$orcamento1 -> quantidadeItens = 3;
$orcamento1 -> reprova();
$orcamento1 -> valor = 150;

$orcamento2 = new Orcamento();
$orcamento2 -> quantidadeItens = 5;
$orcamento2 -> aprova();
$orcamento2 -> finaliza();
$orcamento2 -> valor = 1350;

$listaOrcamento = new ListaDeOrcamentos();
$listaOrcamento -> addOrcamento($orcamento);
$listaOrcamento -> addOrcamento($orcamento1);
$listaOrcamento -> addOrcamento($orcamento2);

foreach ($listaOrcamento as $orcamento){
    echo "Valor:" .$orcamento-> valor.PHP_EOL;
    echo "Estado:" .get_class($orcamento -> estadoAtual).PHP_EOL;
    echo "Quant Itens" .$orcamento -> quantidadeItens.PHP_EOL;
}


