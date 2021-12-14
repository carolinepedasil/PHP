<?php

/*
    Classe Retângulo: Crie uma classe que modele um retângulo:
    a. Atributos: LadoA, LadoB (ou Comprimento e Largura, ou Base e Altura, a escolher)
    b. Métodos: Mudar valor dos Lados, Retornar valor dos Lados, calcular Área e calcular Perímetro;
    c. Crie um programa que utilize esta classe. 
        Ele deve pedir ao usuário que informe as medidades de um local. 
        Depois, deve criar um objeto com as medidas e calcular a quantidade de pisos e de rodapés necessárias para o local.
*/

    class Retangulo {
        private $ladoA;
        private $ladoB;

        public function __construct($ladoA, $ladoB) {
            $this->ladoA = $ladoA;
            $this->ladoB = $ladoB;
        }

        public function getLadoA() {
            return $this->ladoA;
        }

        public function getLadoB() {
            return $this->ladoB;
        }

        public function setLadoA($ladoA) {
            $this->ladoA = $ladoA;
        }

        public function setLadoB($ladoB) {
            $this->ladoB = $ladoB;
        }

        public function calcularArea() {
            return $this->ladoA * $this->ladoB;
        }

        public function calcularPerimetro() {
            return ($this->ladoA * 2) + ($this->ladoB * 2);
        }
    }

    echo "Digite as medidas do local: \n";
    $ladoA = readline("Lado A: ");
    $ladoB = readline("Lado B: ");
    
    $retangulo = new Retangulo($ladoA, $ladoB);

    echo "Medidas do local: \n";
    echo "Lado A: " . $retangulo->getLadoA() . "\n";
    echo "Lado B: " . $retangulo->getLadoB() . "\n";

    echo "Área: " . $retangulo->calcularArea() . "\n";
    echo "Perímetro: " . $retangulo->calcularPerimetro() . "\n";

    echo "Pisos: " . ceil($retangulo->getLadoA() / 2) . "\n";
    echo "Rodapés: " . ceil($retangulo->getLadoB() / 2) . "\n";

?>