<?php

/*
    Classe Conta Corrente: Crie uma classe para implementa uma conta corrente.
    A classe deve possuir os seguintes atributos: número da conta, nome do correntista e saldo.
    Os métodos são os seguintes: alterarNome, depósito e saque; 
    No construtor, saldo é opcional, com valor default zero e os demais atributos são obrigatórios.
*/

    class ContaCorrente {
        public $numero;
        public $nome;
        public $saldo;

        public function __construct($numero, $nome, $saldo = 0) {
            $this->numero = $numero;
            $this->nome = $nome;
            $this->saldo = $saldo;
        }

        public function alterarNome($nome) {
            $this->nome = $nome;
        }

        public function depositar($valor) {
            $this->saldo += $valor;
        }

        public function sacar($valor) {
            $this->saldo -= $valor;
        }
    }

    $conta = new ContaCorrente(123, 'Caroline', 1000);
    $conta->depositar(500);
    $conta->sacar(100);
    $conta->alterarNome('Caroline Silva');

    echo "Número da conta: {$conta->numero}<br>";
    echo "Nome do correntista: {$conta->nome}<br>";
    echo "Saldo: {$conta->saldo}<br>";

?>