<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\itemOrcamento;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    /**
     * @param string $cnpj
     * @param string $razaoSocialEmpresa
     * @param array $itens
     * @param string $observacoes
     * @param \DateTimeInterface $dataEmissao
     * @param float $valorImpostos
     */
    public function __construct(string $cnpj, string $razaoSocialEmpresa, array $itens, string $observacoes, \DateTimeInterface $dataEmissao, float $valorImpostos)
    {
        $this->cnpj = $cnpj;
        $this->razaoSocialEmpresa = $razaoSocialEmpresa;
        $this->itens = $itens;
        $this->observacoes = $observacoes;
        $this->dataEmissao = $dataEmissao;
        $this->valorImpostos = $valorImpostos;
    }

    public function valor():float
    {

        return array_reduce($this ->itens ,function (float $valorAcumulado,itemOrcamento $itemAtual){
            return $valorAcumulado +$itemAtual -> valor;
        },0);

    }
}