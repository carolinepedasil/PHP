<?php

/*
    Classe Pessoa: Crie uma classe que modele uma pessoa:
    a. Atributos: nome, idade, peso e altura
    b. Métodos: Envelhercer, engordar, emagrecer, crescer. 
    Obs: Por padrão, a cada ano que nossa pessoa envelhece, 
    sendo a idade dela menor que 21 anos, ela deve crescer 0,5 cm.
*/

    class Pessoa {
        public $nome;
        public $idade;
        public $peso;
        public $altura;

        public function __construct($nome, $idade, $peso, $altura) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function envelhercer() {
            if ($this->idade < 21) {
                $this->altura += 0.5;
            }
        }

        public function engordar($peso) {
            $this->peso += $peso;
        }

        public function emagrecer($peso) {
            $this->peso -= $peso;
        }

        public function crescer($altura) {
            $this->altura += $altura;
        }
    }

    $pessoa = new Pessoa('Caroline', 24, 65, 1.65);
    $pessoa->envelhercer();
    $pessoa->engordar(10);
    $pessoa->emagrecer(10);
    $pessoa->crescer(0.5);

    echo "Nome: {$pessoa->nome}<br>";
    echo "Idade: {$pessoa->idade}<br>";
    echo "Peso: {$pessoa->peso}<br>";
    echo "Altura: {$pessoa->altura}<br>";
    
?>