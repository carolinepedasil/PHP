<?php

/*
    5) Crie programa que lê o salário de um funcionário, e o percentual de reajuste. 
    O programa deve calcular o salário reajustado e mostrar o resultado.
*/

    echo "Digite o salário do funcionário: ";
    $salario_minimo = fgets(STDIN);

    echo "Digite o percentual de reajuste: ";
    $reajuste_anual = fgets(STDIN);

    $reajuste = $salario_minimo * (1 + $reajuste_anual / 100);

    echo "Seu salário com o reajuste será: R$$reajuste.";

?>
