<?php

/*
    Implemente o diagrama de classe a seguir:

    DVD:
    titulo
    ano

    <<abstract>>
    PRODUTO:
    codigo
    preco

    <<realize>>
    LEITE:
    marca
    volume
    dataValidade

    <<interface>>
    PERECIVEL:
    estaVencido(): boolean
*/

    abstract class Produto{
        public $codigo;
        public $preco;

        public function __construct($codigo, $preco){
            $this->codigo = $codigo;
            $this->preco = $preco;
        }
    }

    class Leite extends Produto{
        public $marca;
        public $volume;
        public $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
            parent::__construct($codigo, $preco);
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function estaVencido(){
            $dataAtual = date('Y-m-d');
            if($dataAtual > $this->dataValidade){
                return true;
            }
            return false;
        }
    }

    class DVD extends Produto{
        public $titulo;
        public $ano;

        public function __construct($codigo, $preco, $titulo, $ano){
            parent::__construct($codigo, $preco);
            $this->titulo = $titulo;
            $this->ano = $ano;
        }
    }

    class Perecivel extends Produto{
        public $marca;
        public $volume;
        public $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
            parent::__construct($codigo, $preco);
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function estaVencido(){
            $dataAtual = date('Y-m-d');
            if($dataAtual > $this->dataValidade){
                return true;
            }
            return false;
        }
    }

    $leite = new Leite(1, 2.50, 'Coca-Cola', 1.5, '2020-01-01');
    $dvd = new DVD(2, 10, 'Avengers', 2019);
    $perecivel = new Perecivel(3, 5, 'Coca-Cola', 1.5, '2020-01-01');

    echo "Produto: " . $leite->codigo . " - " . $leite->preco . PHP_EOL;
    echo "Produto: " . $dvd->codigo . " - " . $dvd->preco . PHP_EOL;
    echo "Produto: " . $perecivel->codigo . " - " . $perecivel->preco . PHP_EOL;

    echo "Está vencido: " . $leite->estaVencido() . PHP_EOL;
    echo "Está vencido: " . $perecivel->estaVencido() . PHP_EOL;

?>