<?php

/*
    6) Uma professora, muito legal, fez 3 provas durante um semestre mas só vai levar em conta as duas notas mais altas para calcular a média.
    Faça uma aplicação em PHP que peça o valor das 3 notas, mostre como seria a média com essas 3 provas, a média com as 2 notas mais altas, bem como sua nota mais alta e sua nota mais baixa
*/

    echo "Digite a PRIMEIRA nota: ";
    $nota1 = (float) fgets(STDIN);  
    echo "Digite a SEGUNDA nota: ";
    $nota2 = (float) fgets(STDIN);
    echo "Digite a TERCEIRA nota: ";
    $nota3 = (float) fgets(STDIN);

    // Média com essas 3 provas
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "A média das 3 notas é: $media \n";

    // Média com as 2 notas mais altas
    $maior = max($nota1, $nota2, $nota3);
    $menor = min($nota1, $nota2, $nota3);
    $media2 = ($maior + $menor) / 2;
    echo "A média das 2 notas mais altas é: $media2 \n";

    // Nota mais alta
    echo "A nota mais alta é: $maior \n";

    // Nota mais baixa
    echo "A nota mais baixa é: $menor \n";

?>