<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento,
    Pedido,
    Relatorio\ArquivoXmlExportado,
    Relatorio\PedidoExportado,
    Relatorio\OrcamentoExportado,
    Relatorio\ArquivoExportado,
    Relatorio\ArquivoZipExportado};

$pedido = new Pedido();
$pedido -> nomeCliente = 'Vincius Dias';
$pedido ->dataFinalizacao = new DateTimeImmutable(); //data de hoje

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoZipExportado('orcamento.array');

echo  $orcamentoExportadoXml -> salvar($orcamentoExportado);