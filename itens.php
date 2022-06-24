<?php


use Alura\DesignPattern\itemOrcamento;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamentoAntigo = new Orcamento();
$orcamentoMaisAntigoAinda = new Orcamento();
$iten1 = new itemOrcamento();
$iten2 = new itemOrcamento();
$iten3 = new itemOrcamento();
$iten4 = new itemOrcamento();
$iten1 -> valor = 300;
$iten2 -> valor = 500;
$iten3 -> valor = 150;
$iten4 -> valor = 250;

$orcamento -> addItem($iten1);
$orcamento -> addItem($iten2);
$orcamentoMaisAntigoAinda -> addItem($iten4);
$orcamentoAntigo -> addItem($orcamentoMaisAntigoAinda);
$orcamentoAntigo -> addItem($iten3);
$orcamento -> addItem($orcamentoAntigo);

echo  $orcamento -> valor();

