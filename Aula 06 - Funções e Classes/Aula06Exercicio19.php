<?php

/*
    7) Classe Bichinho Virtual:
    Crie uma classe que modele um Tamagushi(Bichinho Eletrônico): 

    a. Atributos: Nome, Fome, Saúde e Idade
    b. Métodos: Alterar Nome,Fome, Saúde e Idade; 
    Retornar Nome, Fome, Saúde e Idade 

    Obs: Existe mais uma informação que devemos levar em consideração, o Humor do nosso tamagushi, 
    este humor é uma  combinação entre os atributos Fome e Saúde, ou seja, um campo calculado, 
    então não devemos criar um atributo para armazenar esta informação por que ela pode ser calculada a qualquer momento.
*/

    class Tamagushi{
        public $nome;
        public $fome;
        public $saude;
        public $idade;
        public $humor;

        public function __construct($nome, $fome, $saude, $idade){
            $this->nome = $nome;
            $this->fome = $fome;
            $this->saude = $saude;
            $this->idade = $idade;
            $this->humor = $this->fome + $this->saude;
        }

        public function alterarNome($nome){
            $this->nome = $nome;
        }

        public function alterarFome($fome){
            $this->fome = $fome;
        }

        public function alterarSaude($saude){
            $this->saude = $saude;
        }

        public function alterarIdade($idade){
            $this->idade = $idade;
        }

        public function retornarNome(){
            return $this->nome;
        }

        public function retornarFome(){
            return $this->fome;
        }

        public function retornarSaude(){
            return $this->saude;
        }

        public function retornarIdade(){
            return $this->idade;
        }

        public function retornarHumor(){
            return $this->humor;
        }
    }

    $tamagushi = new Tamagushi("Carolzinha", 5, 10, 1);

    echo "Nome: " . $tamagushi->retornarNome() . "\n";
    echo "Fome: " . $tamagushi->retornarFome() . "\n";
    echo "Saúde: " . $tamagushi->retornarSaude() . "\n";
    echo "Idade: " . $tamagushi->retornarIdade() . "\n";
    echo "Humor: " . $tamagushi->retornarHumor() . "\n";

?>