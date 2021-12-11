<?php

/*
    8)Usando funções para manipulação de arrays:
    Preencher um vetor com os números 10 a 20, e depois mostrar os elementos pares do vetor de trás pra frente. E também mostrar os números ímpares.
*/

    $vetor = array();

    for($i = 10; $i <= 20; $i++){
        $vetor[] = $i;
    }

    echo "Números pares: ";
    foreach($vetor as $numero){
        if($numero % 2 == 0){
            echo "$numero ";
        }
    }

    echo "\nNúmeros ímpares: ";
    foreach($vetor as $numero){
        if($numero % 2 != 0){
            echo "$numero ";
        }
    }

    // TRÁS PARA FRENTE

    echo "\n\nNúmeros pares de trás pra frente: ";
    for($i = count($vetor) - 1; $i >= 0; $i--){
        if($vetor[$i] % 2 == 0){
            echo "$vetor[$i] ";
        }
    }

    echo "\nNúmeros ímpares de trás pra frente: ";
    for($i = count($vetor) - 1; $i >= 0; $i--){
        if($vetor[$i] % 2 != 0){
            echo "$vetor[$i] ";
        }
    }

?>