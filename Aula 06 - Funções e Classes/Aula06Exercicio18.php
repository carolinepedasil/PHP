<?php

/*
    Classe TV: Faça um programa que simule um televisor criando-o como um objeto.
    O usuário deve ser capaz de informar o número do canal e aumentar ou diminuir o volume.
    Certifique-se de que o número do canal e o nível do volume permaneçam dentro de faixas válidas.
*/

    class TV {
        public $canal;
        public $volume;

        public function __construct($canal, $volume) {
            $this->canal = $canal;
            $this->volume = $volume;
        }

        public function mudarCanal($canal) {
            $this->canal = $canal;
        }

        public function aumentarVolume($volume) {
            $this->volume += $volume;
        }

        public function diminuirVolume($volume) {
            $this->volume -= $volume;
        }
    }

    $tv = new TV(2, 10);
    $tv->mudarCanal(5);
    $tv->aumentarVolume(5);
    $tv->diminuirVolume(5);

    echo "Canal: {$tv->canal}<br>";
    echo "Volume: {$tv->volume}<br>";

?>