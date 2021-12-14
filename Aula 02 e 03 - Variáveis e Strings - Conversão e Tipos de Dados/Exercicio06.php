<?php

/*
    6) Crie um programa que lê um número real em dólar, e converte o valor para reais. 
    Considere que a cotação é US$ 1 = R$ 5,47. 
    Utilize uma constante para armazenar o valor do dolar.
*/

    echo "Digite quantos doláres você quer: ";
    $dolar = fgets(STDIN);
    $real = 5.47 * $dolar;

    echo "US$$dolar vai dar R$$real."
    
?>
