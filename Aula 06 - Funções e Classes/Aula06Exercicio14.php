<?php

/*
    Classe Quadrado: Crie uma classe que modele um quadrado:
    a. Atributos: Tamanho do lado
    b. Métodos: Mudar valor do Lado, Retornar valor do Lado e calcular Área
*/

    class Quadrado {
        private $lado;

        public function __construct($lado) {
            $this->lado = $lado;
        }

        public function getLado() {
            return $this->lado;
        }

        public function setLado($lado) {
            $this->lado = $lado;
        }

        public function calcularArea() {
            return pow($this->lado, 2);
        }
    }

    $quadrado = new Quadrado(5);
    echo "Lado: " . $quadrado->getLado() . "\n";
    echo "Área: " . $quadrado->calcularArea() . "\n";

?>
