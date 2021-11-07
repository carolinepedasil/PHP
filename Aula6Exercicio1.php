<?php

/*
    Crie uma função que receba um valor e inform se ele é positivo ou não.
*/

    echo "Digite um número: ";
    $numero = (int) fgets(STDIN);

    function verificaNumero($numero) {
        if ($numero > 0) {
            echo "O número $numero é positivo";
        } else {
            echo "O número $numero é negativo";
        }
    }

    verificaNumero($numero);
    
?>
