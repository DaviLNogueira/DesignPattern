<?php

use Alura\DesignPattern\itemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require_once  "vendor/autoload.php";

$item1 = new itemOrcamento();
$item2 = new itemOrcamento();
$item3 = new itemOrcamento();
$item1 -> valor =500;
$item2 -> valor =250;
$item3 -> valor =300;

$builder = new ConstrutorNotaFiscalServico();
$builder -> paraEmpresa('10000','Novo Sabor Sorvetes');
$builder -> comItem($item1);
$builder -> comItem($item2);
$builder -> comItem($item3);

$builder -> comObservacpoes('Esta nota fiscal fois construida com um construtor');

$notaFiscal = $builder -> constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2 -> itens[] =  new itemOrcamento();

var_dump($notaFiscal);
var_dump($notaFiscal2);

echo $notaFiscal -> valor();