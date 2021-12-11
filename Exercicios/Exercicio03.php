<?php

/*
    3) Crie uma função em linguagem PHP chamado Dado() que retorna, através de sorteio, um número de 1 até 6.
*/

    function dado(){
        $numero = rand(1, 6);
        return $numero;
    }

    $dado = dado();
    echo "O número retornado foi $dado.";

?>