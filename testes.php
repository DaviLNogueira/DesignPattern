<?php

use Alura\DesignPattern\{CalculadoraDeImpostos, Impostos\ISS, Orcamento};

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento -> valor = 100;

echo  $calculadora -> calcular($orcamento, new ISS());