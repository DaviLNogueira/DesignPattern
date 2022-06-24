<?php

namespace Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Orcamento;

class CriadorDePedido
{

    private array $templates = [];
    public function criaPedido(string $nomeClient, string $dataFormatada, Orcamento $orcamento):Pedido
    {

        $template = $this->gerarTemplatePedido($nomeClient, $dataFormatada);
        var_dump($orcamento);
        $pedido = new Pedido();
        $pedido -> template = $template;
        $pedido -> orcamento = $orcamento;

        return $pedido;

    }

    /**
     * @param string $nomeClient
     * @param string $dataFormatada
     * @return TemplatePedido
     * @throws \Exception
     */
    public function gerarTemplatePedido(string $nomeClient, string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeClient.$dataFormatada);
        if(!array_key_exists($hash,$this -> templates)){
            $template = new TemplatePedido($nomeClient, new \DateTimeImmutable($dataFormatada));
            $this -> templates[$hash] = $template;
        }
        return $this -> templates[$hash];
    }
}