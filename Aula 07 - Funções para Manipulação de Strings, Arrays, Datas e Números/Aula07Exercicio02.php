<?php

/*
    Preencher um vetor com números inteiros (8 unidades);
    Solicitar um número do teclado.
    Pesquisar se esse número existe no vetor.
    Se existir, imprimir em qual posição do vetor.
    Se não existir, imprimir mensagem que não existe.
*/

    $vetor = [1, 2, 3, 4, 5, 6, 7, 8];
    $numero = 0;
    $existe = false;

    echo "Digite um número: ";
    $numero = fgets(STDIN);
    $numero = (int)$numero;

    foreach($vetor as $key => $value){
        if($numero == $value){
            $existe = true;
            echo "O número $numero existe no vetor na posição $key.\n";
        }
    }
    if(!$existe){
        echo "O número $numero não existe no vetor.\n";
    }

?>