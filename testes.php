<?php

use Alura\DesignPattern\{Impostos\CalculadoraDeDescontos, Orcamento};

require 'vendor/autoload.php';
//
//$calculadora = new CalculadoraDeImpostos();
//
//$orcamento = new Orcamento();
//$orcamento -> valor = 100;
//
//echo  $calculadora -> calcular($orcamento, new ISS());

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento -> valor = 600;
$orcamento -> quantidadeItens = 6;

echo $calculadora -> calculaDescontos($orcamento);