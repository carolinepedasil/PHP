<?php

//2) Crie programa que solicite o nome, o endereço e a idade do usuário e depois mostra os dados digitados em uma única linha. 
//Exemplo: <nome> mora no endereço: <endereço> e tem <idade> anos.

    echo "Digite seu nome: ";
    $nome = fgets(STDIN);

    echo "Digite seu endereço: ";
    $endereco = fgets(STDIN);

    echo "Digite sua idade: ";
    $idade = fgets(STDIN);

    echo "$nome mora no endereço: $endereco e tem $idade anos.";

?>
