<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Pedido\Pedido;
use ReturnTypeWillChange;
use SplObserver;

class GerarPedidoHandler implements \SplSubject // interface responsável por notificar que algo aconteceu
{
    /**@var SplObserver[]*/
    /*Determinar o tipo da váriavel*/
    private array  $acoesAposGerarPedido = [];
    public Pedido $pedidoGerado;
    
    public function __construct() //PedidoRepositoty, MailService
    {

    }

    // pode colocar o tipo de um objeto com uma interface, pois as classes que as implementarem poderam
    // ser chamadas

    public function execute(GerarPedido  $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento -> quantidadeItens = $gerarPedido -> getNumeroItens();
        $orcamento -> valor = $gerarPedido ->getValorOrcamento();

        $pedido = new Pedido();
        $pedido -> dataFinalizacao = new \DateTimeImmutable(); // colocar a hora de hoje;
        $pedido -> nomeCliente = $gerarPedido ->getNomeCliente();
        $pedido -> orcamento = $orcamento;

        $this ->pedidoGerado = $pedido;
        $this -> notify();



    }

    #[ReturnTypeWillChange] public function attach(SplObserver $observer)
    {
        $this-> acoesAposGerarPedido[] = $observer;
    }

    #[ReturnTypeWillChange] public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
    }

    #[ReturnTypeWillChange] public function notify() // implementa uma classe que notifica
    {
        foreach ($this->acoesAposGerarPedido as $acoes){
            $acoes ->update($this); //
        }
    }
}