<?php

/*
    4) Crie um programa que leia um número na tela, mostra seus 2 sucessores e 2 antecessores. 
    Exemplo: numero = 5, antecessores 4,3, sucessores 6,7.
*/

    echo "Digite um número: ";
    $numero = fgets(STDIN);

    $antecessor_1 = $numero - 1;
    $antecessor_2 = $antecessor_1 - 1;

    $sucessor_1 = $numero + 1;
    $sucessor_2 = $sucessor_1 + 1;

    echo "Os dois antecessores do número $numero são: $antecessor_1 e $antecessor_2. E os dois sucessores do número $numero são: $sucessor_1 e $sucessor_2.";

?>
