<?php

//5) Crie programa que lê o salário de um funcionário, e o percentual de reajuste. O programa deve calcular o salário reajustado e mostrar o resultado.

    echo "O reajuste para este ano será de 1%. Digite seu salário: ";
    $salario_minimo = fgets(STDIN);
    $reajuste_anual = 1;

    //echo "Se o percentual do ajuste for diferente para cada funcionário, então digite o valor do percentual do ajuste: ";
    //$reajuste_anual = fgets(STDIN);

    $reajuste = $salario_minimo * (1 + $reajuste_anual / 100);

    echo "Seu salário com o reajuste de 1% será: R$$reajuste.";

?>
