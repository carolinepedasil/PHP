<?php

//9) Sabendo-se que um veiculo faz 12km/lt. Faça um programa que calcule a média de consumo de combustível de um veículo. O usuário deve informar o KM inicial (ex: 12500 km), o KM final (ex. 12700 km) e quantos litros foram gastos no percurso.

    $kmlt = 12;

    echo "Digite o KM inicial: ";
    $kminicial = fgets(STDIN);

    echo "Agora digite o KM final: ";
    $kmfinal = fgets(STDIN);

    $kmrodado = $kmfinal - $kminicial;
    echo "Foram rodados $kmrodado km. \n";

    $litros = $kmrodado / $kmlt;
    echo "$litros litros foram gastos no percurso.";

?>
