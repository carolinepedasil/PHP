<?php

/*
    Crie uma função que receba como parâmetro uma string com 5 nomes separados por "-".
    Substitua o delimitador ";". 
    Coloque todos os nomes em maiúscuo.
    Converta essa string para vetor e após isso, liste os nomes com menos de 5 caracteres.

    EXEMPLO
    Entrada: $nome = "Caio-David-Pedro-Ana-Leticia";
    Saída: Caio, Ana
*/

    function nomes($nome){
        
        $nome = str_replace("-", ",", $nome);
        
        $nome = strtoupper($nome);
        
        $nome = explode(",", $nome);
        $nome = array_filter($nome, function($nome){
            return strlen($nome) < 5;
        });
        return $nome;
    }

    echo "Digite 5 nomes: (Exemplo: Caio-David-Pedro-Ana-Leticia) ";
    $nome = fgets(STDIN);
    $nome = nomes($nome);
    print_r($nome);

?>