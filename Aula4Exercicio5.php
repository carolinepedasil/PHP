<?php

/*
    Exercício de Fixação - For 
    Em um campeonato de futebol existem 5 times e cada time possui 11 jogadores. 
    Faça um programa que receba a idade, o peso e a altura de cada um dos jogadores. 
    Calcule e mostre: 
    
    a) A quantidade de jogadores com idade inferior a 18 anos; 
    b) A média das idades dos jogadores de cada time 
    c) A média das alturas de todos os jogadores do campeonato; 
    d) A percentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato 

*/

    $times = array(
        array(
            "time" => "Palmeiras",
            "jogadores" => array(
                array(
                    "nome" => "Eduardo Pereira Rodrigues",
                    "idade" => "29",
                    "peso" => "63",
                    "altura" => "1.66"
                ),
                array(
                    "nome" => "Joaquín Piquerez",
                    "idade" => "23",
                    "peso" => "81",
                    "altura" => "1.82"
                )
            )
        ),
        array(
            "time" => "São Paulo",
            "jogadores" => array(
                array(
                    "nome" => "Jonathan Calleri",
                    "idade" => "28",
                    "peso" => "70",
                    "altura" => "1.81"
                ),
                array(
                    "nome" => "Emiliano Rigoni",
                    "idade" => "28",
                    "peso" => "72",
                    "altura" => "1.80"
                )
            )
        ),
        array(
            "time" => "Corinthians",
            "jogadores" => array(
                array(
                    "nome" => "Willian",
                    "idade" => "33",
                    "peso" => "8770",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Róger Guedes",
                    "idade" => "25",
                    "peso" => "76",
                    "altura" => "1.82"
                )
            )
        ),
        array(
            "time" => "Santos",
            "jogadores" => array(
                array(
                    "nome" => "Léo Baptistão",
                    "idade" => "29",
                    "peso" => "77",
                    "altura" => "1.81"
                ),
                array(
                    "nome" => "Diego Tardelli",
                    "idade" => "36",
                    "peso" => "72",
                    "altura" => "1.79"
                )
            )
        ),
        array(
            "time" => "Guarani",
            "jogadores" => array(
                array(
                    "nome" => "Bruno Sávio",
                    "idade" => "27",
                    "peso" => "70",
                    "altura" => "1.81"
                ),
                array(
                    "nome" => "Andrigo",
                    "idade" => "26",
                    "peso" => "71",
                    "altura" => "1.70"
                )
            )
        )
    );

    //calcular A quantidade de jogadores com idade inferior a 18 anos; 

    $qtdJogadoresMenores18 = 0;

    foreach($times as $time){
        foreach($time["jogadores"] as $jogador){
            if($jogador["idade"] < 18){
                $qtdJogadoresMenores18++;
            }
        }
    }

    echo "\n A quantidade de jogadores com idade inferior a 18 anos é: " . $qtdJogadoresMenores18;

    //calcular A média das idades dos jogadores de cada time

    $qtdJogadores = 0;
    $somaIdades = 0;

    foreach($times as $time){
        foreach($time["jogadores"] as $jogador){
            $qtdJogadores++;
            $somaIdades += $jogador["idade"];
        }
    }

    $mediaIdades = $somaIdades / $qtdJogadores;

    echo "\n A média das idades dos jogadores de cada time é: " . $mediaIdades;

    //calcular A média das alturas de todos os jogadores do campeonato

    $qtdJogadores = 0;
    $somaAlturas = 0;

    foreach($times as $time){
        foreach($time["jogadores"] as $jogador){
            $qtdJogadores++;
            $somaAlturas += $jogador["altura"];
        }
    }

    $mediaAlturas = $somaAlturas / $qtdJogadores;

    echo "\n A média das alturas de todos os jogadores do campeonato é: " . $mediaAlturas;

    //calcular A percentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato

    $qtdJogadores = 0;
    $qtdJogadoresMais80 = 0;

    foreach($times as $time){
        foreach($time["jogadores"] as $jogador){
            $qtdJogadores++;
            if($jogador["peso"] > 80){
                $qtdJogadoresMais80++;
            }
        }
    }

    $percentagemJogadoresMais80 = ($qtdJogadoresMais80 * 100) / $qtdJogadores;

    echo "\n A percentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato é: " . $percentagemJogadoresMais80 . "%";

?>
