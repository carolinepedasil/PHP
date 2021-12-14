<?php

/*
    Chico tem 1.50cm e cresce 2 centímetros por ano, enquanto Juca tem 1.10cm e cresce 3 centímetros por ano.
    Construir um algortimo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.
*/

    $chico = 1.50;
    $juca = 1.10;
    $anos = 0;

    while($juca < $chico){
        $juca = $juca + 0.03;
        $anos++;
    }

    echo "Juca será maior que Chico em $anos anos.";

?>
