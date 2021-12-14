<?php

/*
    5) Crie um aplicativo de conversão entre as temperaturas Celsius e Farenheit.
    Primeiro o usuário deve escolher se vai entrar com a temperatura em Célsius ou Farenheit, 
    depois a conversão escolhida é realizada através de um comando SWITCH.
    Se C é a temperatura em Célsius e F em farenheit, as fórmulas de conversão são:
    C= 5.(F-32)/9
    F= (9.C/5) + 32
*/

    echo "Digite C para Celsius OU F para Farenheit: ";
    $escolha = fgets(STDIN);
    $escolha = trim($escolha);
    $escolha = strtoupper($escolha);

    switch ($escolha) {
        case 'C':
            echo "Digite a temperatura em Celsius: ";
            $celsius = fgets(STDIN);
            $celsius = trim($celsius);
            $farenheit = (9 * $celsius) / 5 + 32;
            echo "A temperatura em Farenheit é: $farenheit";
            break;
        case 'F':
            echo "Digite a temperatura em Farenheit: ";
            $farenheit = fgets(STDIN);
            $farenheit = trim($farenheit);
            $celsius = (5 * ($farenheit - 32)) / 9;
            echo "A temperatura em Celsius é: $celsius";
            break;
        default:
            echo "Opção inválida!";
            break;
    }
    
?>
