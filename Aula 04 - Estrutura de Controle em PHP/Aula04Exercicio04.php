<?php

/*
    Faça um programa que leia o número de termos, determine e mostre os valores de acordo com a série abaixo:
    2, 7, 3, 4, 21, 12, 8, 63, 48, 16, 189, 32, 567, 768, 64
*/

    echo "Digite o número de termos (até 15): ";
    $n = (int) fgets(STDIN);

    $termos = array(2, 7, 3, 4, 21, 12, 8, 63, 48, 16, 189, 32, 567, 768, 64);

    for ($i = 0; $i < $n; $i++) {
        echo $termos[$i] . PHP_EOL;
    }

?>