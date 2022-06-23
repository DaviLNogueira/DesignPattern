<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /**@var  AcaoAposGerarPedido[]*/
    /*Determinar o tipo da váriavel*/
    private array  $acoesAposGerarPedido = [];
    
    public function __construct() //PedidoRepositoty, MailService
    {

    }

    // pode colocar o tipo de um objeto com uma interface, pois as classes que as implementarem poderam
    // ser chamadas
    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido  $acao)
    {
        //irá colocar varias ações no array
        $this->acoesAposGerarPedido[] = $acao;
    }
    
    public function execute(GerarPedido  $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento -> quantidadeItens = $gerarPedido -> getNumeroItens();
        $orcamento -> valor = $gerarPedido ->getValorOrcamento();

        $pedido = new Pedido();
        $pedido -> dataFinalizacao = new \DateTimeImmutable(); // colocar a hora de hoje;
        $pedido -> nomeCliente = $gerarPedido ->getNomeCliente();
        $pedido -> orcamento = $orcamento;


        foreach ($this -> acoesAposGerarPedido as $acoes){
            $acoes -> executaAcao($pedido);
        }
    }
}