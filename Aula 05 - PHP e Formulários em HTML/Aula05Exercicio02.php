<?php

/*
    Crie um programa que receba dois números e a operação desejada e mostre o resultado da operação (+, -, /, *)
*/

    echo "Digite o primeiro número: ";
    $num1 = (float) fgets(STDIN);

    echo "Digite o segundo número: ";
    $num2 = (float) fgets(STDIN);

    echo "Digite a operação (+, -, /, *): ";
    $operacao = trim(fgets(STDIN));

    switch ($operacao) {
        case '+':
            echo "O resultado da soma é: " . ($num1 + $num2);
            break;
        case '-':
            echo "O resultado da subtração é: " . ($num1 - $num2);
            break;
        case '/':
            echo "O resultado da divisão é: " . ($num1 / $num2);
            break;
        case '*':
            echo "O resultado da multiplicação é: " . ($num1 * $num2);
            break;
        default:
            echo "Operação inválida!";
            break;
    }

    echo "\n";

?>