<?php

//10) Faça um programa que calcule o valor a ser pago por uma dívida em atraso. O usuário deve informar o valor original da dívida (ex. R$ 50,00), a quantidade de dias em atraso (ex: 35 dias) e o percentual da multa por dia de atraso (ex. 1%)

    echo "Digite o valor original da divida: ";
    $valorOriginal = fgets(STDIN);

    echo "Digite a quantidade de didas em atraso: ";
    $quantidadeDiasAtraso = (int) fgets(STDIN);

    echo "Digite o percentual da multa: ";
    $percentualMulta = (float) fgets(STDIN);

    $valorDivida = ($valorOriginal * ($quantidadeDiasAtraso * $percentualMulta))/100 + $valorOriginal;
    echo "O valor a ser pago pela divida em atraso é $valorDivida.";

?>
