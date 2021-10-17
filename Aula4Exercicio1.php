<?php

// Exercício fixação Switch Case
// Escreva um algoritmo que leia um número inteiro (de 1 a 7) representando o dia da semana e informe o nome do dia correspondente.

echo "Digite um número inteiro (de 1 a 7): ";
$diadasemana = fgets(STDIN);

switch ($diadasemana)
{
    case 1:
        $diadasemana = "Domingo";
        echo $diadasemana;
        break;
    case 2:
        $diadasemana = "Segunda";
        echo $diadasemana;
        break;
    case 3:
        $diadasemana = "Terça";
        echo $diadasemana;
        break;
    case 4:
        $diadasemana = "Quarta";
        echo $diadasemana;
        break;
    case 5:
        $diadasemana = "Quinta";
        echo $diadasemana;
        break;
    case 6:
        $diadasemana = "Sexta";
        echo $diadasemana;
        break;
    case 7:
        $diadasemana = "Sábado";
        echo $diadasemana;
        break;
    default:
        echo "Número inválido!";

}

?>
