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


    public function valor():float
    {

        return array_reduce($this ->itens ,function (float $valorAcumulado,itemOrcamento $itemAtual){
            return $valorAcumulado +$itemAtual -> valor;
        },0);

    }

    public function clonar() : NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();
        $cloneNotaFiscal -> cnpj = $this -> cnpj;
        $cloneNotaFiscal -> razaoSocialEmpresa = $this -> razaoSocialEmpresa;
        $cloneNotaFiscal -> itens = $this->itens;
        $cloneNotaFiscal -> observacoes = $this->observacoes;
        $cloneNotaFiscal -> dataEmissao = $this->dataEmissao;
        $cloneNotaFiscal -> valorImpostos = $this->valorImpostos;
        return  $cloneNotaFiscal;
    }

    public function __clone(): void
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }

}