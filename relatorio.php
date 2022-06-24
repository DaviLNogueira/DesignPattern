<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Pedido\Pedido, Relatorio\ArquivoZipExportado, Relatorio\PedidoExportado};

$pedido = new Pedido();
$pedido -> nomeCliente = 'Vincius Dias';
$pedido ->dataFinalizacao = new DateTimeImmutable(); //data de hoje

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoZipExportado('orcamento.array');

echo  $orcamentoExportadoXml -> salvar($orcamentoExportado);