<?php

/*
    3) Crie um programa que leia uma idade de uma pessoa e calcule quantos dias essa pessoa já viveu.
*/

    echo "Digite sua data de nascimento, assim: AAAA-MM-DD (Ano/Mês/Dia) ";
    $data = fgets(STDIN);
    
    $diff = (date('Y') - date('Y',strtotime($data)));

    echo "Você tem $diff anos. ";

    $diferenca = ($diff)*(365); //para este exercício, eu considerei que todos os anos tem exatamente 365 dias.

    echo "Você já viveu $diferenca dias. ";

?>
