<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXml
{

    public function exportar(Orcamento $orcamento): string|bool
    {
        $elementoOrcamento = new \SimpleXMLElement('<orcamento/>'); // cria um xml
        $elementoOrcamento ->addChild('valor',$orcamento -> valor); // adiciona os filhos que ficaram dentro
        $elementoOrcamento -> addChild('quantidade_itens',$orcamento ->quantidadeItens);

        return $elementoOrcamento -> asXML();
    }
}