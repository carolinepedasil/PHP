<?php

/*
    7) Crie um programa que leia as variáveis inteiras x e y e troque o valor destas variáveis. 
    Isto é, x deve ficar com o valor de y e y deve ficar com o valor de x. 
    Mostre os valores depois da troca.
*/

    echo "Digite a variavel x: ";
    $x = fgets(STDIN);

    echo "Agora digite a variavel y: ";
    $y = fgets(STDIN);

    $xtrocado = $y;
    $ytrocado = $x;

    echo "Depois da troca, agora x é $xtrocado, e y é $ytrocado. Ou seja, x ficou com valor de y e y ficou com valor de x.";

?>
