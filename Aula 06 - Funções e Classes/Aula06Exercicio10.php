<?php

/*
    Use a função da questão passada e lance o dado 1 milhão de vezes. 
    Conte quantas vezes cada número saiu. 
    A probabilidade deu certo? Ou seja, a porcentagem dos números foi parecida?
*/

    function dado(){
        $numero = rand(1, 6);
        return $numero;
    }

    $contador = array();

    for($i = 0; $i < 1000000; $i++){
        $dado = dado();
        $contador[$dado]++;
    }

    print_r($contador);

    // Resposta: Sim!

?>
