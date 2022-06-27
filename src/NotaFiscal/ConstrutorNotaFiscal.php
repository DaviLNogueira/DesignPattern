<?php

namespace Alura\DesignPattern\NotaFiscal;

use Alura\DesignPattern\itemOrcamento;

abstract  class ConstrutorNotaFiscal
{

    protected  NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this -> notaFiscal = new NotaFiscal();
        $this->notaFiscal -> dataEmissao = new  \DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial) : void
    {
        $this->notaFiscal -> cnpj = $cnpj;
        $this->notaFiscal -> razaoSocialEmpresa = $razaoSocial;
    }

    public function comItem(itemOrcamento $item):void
    {
        $this->notaFiscal ->itens[] = $item;
    }

    public function comObservacpoes(string $observacoes):void
    {
        $this->notaFiscal -> observacoes = $observacoes;
    }

    public function ComDataEmissao(\DateTimeImmutable $dataEmissao):void
    {
        $this->notaFiscal ->dataEmissao = $dataEmissao;
    }

     abstract  public function constroi(): NotaFiscal;


}