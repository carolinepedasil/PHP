<?php

/*
    2) Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. 
    Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.
*/

    $chico = 1.50;
    $juca = 1.10;
    $anos = 0;

    while($juca < $chico){
        $juca = $juca + 0.03;
        $anos++;
    }

    echo "Serão necessários $anos anos para que Juca seja maior que Chico.";

?>