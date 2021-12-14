<?php

/*
    Classe Bola: Crie uma classe que modele uma bola:
    a. Atributos: Cor, circunferência, material
    b. Métodos: trocaCor e mostraCor
*/

    class Bola{
        private $cor;
        private $circunferencia;
        private $material;

        public function __construct($cor, $circunferencia, $material){
            $this->cor = $cor;
            $this->circunferencia = $circunferencia;
            $this->material = $material;
        }

        public function trocaCor($cor){
            $this->cor = $cor;
        }

        public function mostraCor(){
            return $this->cor;
        }
    }

    $bola = new Bola("azul", 20, "plástico");
    echo "Cor: " . $bola->mostraCor() . "\n";

    $bola->trocaCor("verde");
    echo "Cor: " . $bola->mostraCor() . "\n";

?>
