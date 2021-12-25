<?php

/*
    Preencher um vetor com os números 10 a 20, e depois mostrar os elementos pares do vetor de trás para frente.
    E também mostrar os números ímpares.
*/

    $vetor = [];
    $vetorPares = [];
    $vetorImpares = [];

    for($i = 10; $i <= 20; $i++){
        $vetor[] = $i;
    }

    foreach($vetor as $key => $value){
        if($value % 2 == 0){
            $vetorPares[] = $value;
        }else{
            $vetorImpares[] = $value;
        }
    }

    echo "Vetor: ";
    print_r($vetor);

    echo "Vetor Pares: ";
    print_r($vetorPares);
    
    echo "Vetor Impares: ";
    print_r($vetorImpares);

?>