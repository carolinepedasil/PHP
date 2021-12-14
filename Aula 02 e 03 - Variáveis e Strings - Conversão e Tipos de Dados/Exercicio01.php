<?php

/*
    1) Crie um programa que escreve o seu nome completo, colocando uma palavra em cada linha.
*/

    echo "Digite seu nome e sobrenome: ";
    $nome = fgets(STDIN);

    $partes = explode(" ", $nome);
    if(count($partes) > 1) {
        $nome1 = array_pop($partes);
        $nome2 = implode(" ", $partes);
    }

    else
    {
        $nome1 = $nome;
        $nome2 = " ";
    }

    echo "Primeiro Nome: $nome2\n";
    echo "Sobrenome: $nome1\n";

?>