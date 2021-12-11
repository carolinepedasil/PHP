<?php

/*
    8) Faça um programa que solicite ao usuário o valor do litro de combustível (ex. 4,19) e qual valor ele deseja abastecer (ex. 50,00). 
    Calcule quantos litros de combustível o usuário obterá com esses valores.
*/
    echo "Digite o valor do litro: ";
    $valorlitro = fgets(STDIN);

    echo "Digite o valor que você deseja abastecer: ";
    $valorabastecimento = fgets(STDIN);

    $litros = $valorabastecimento / $valorlitro;

    echo "Você vai obter $litros litros de combustível com esses valores.";

?>
