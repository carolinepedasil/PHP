<?php

// Exercício fixação IF

/*
    Crie um algoritmo que leia dois valores (x e y) representando um intervalo. 
    Em seguida, leia um novo valor (z) e verifique se z pertence ao intervalo [x, y].
*/

    echo "Digite um valor para X: ";
    $x = fgets(STDIN);

    echo "Digite um valor para Y: ";
    $y = fgets(STDIN);

    echo "Digite um valor para Z: ";
    $z = fgets(STDIN);

    if(($z<=$y) && ($z>=$x)){
        echo "Z está entre o intervalo X e Y.";
    }else{
        echo "Z não pertence ao intervalo X e Y.";
    }

?>
