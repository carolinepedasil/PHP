<?php

/*
    Implementar uma aplicação que declara uma variável polimórfica do tipo OperacaoMatematica.
    A partir de dados fornecidos pelo usuário, a aplicação deve realizar uma operação matemática e imprimir o seu resultado.
    Oferecer para o usuário um menu para a escolha entre as operações matemáticas disponíveis.
*/

    class OperacaoMatematica{
        public $numero1;
        public $numero2;
        public $resultado;

        public function __construct($numero1, $numero2){
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somar(){
            $this->resultado = $this->numero1 + $this->numero2;
        }

        public function subtrair(){
            $this->resultado = $this->numero1 - $this->numero2;
        }

        public function multiplicar(){
            $this->resultado = $this->numero1 * $this->numero2;
        }

        public function dividir(){
            $this->resultado = $this->numero1 / $this->numero2;
        }

        public function retornarResultado(){
            return $this->resultado;
        }
    }

    $operacao = new OperacaoMatematica(10, 5);

    echo "Digite o primeiro número: ";
    $operacao->numero1 = (int) fgets(STDIN);

    echo "Digite o segundo número: ";
    $operacao->numero2 = (int) fgets(STDIN);

    echo "Digite a operação matemática: ";
    $operacao->operacao = trim(fgets(STDIN));

    switch($operacao->operacao){
        case '+':
            $operacao->somar();
            break;
        case '-':
            $operacao->subtrair();
            break;
        case '*':
            $operacao->multiplicar();
            break;
        case '/':
            $operacao->dividir();
            break;
        default:
            echo "Operação inválida!";
            break;
    }
    
        echo "Resultado: " . $operacao->retornarResultado();

?>