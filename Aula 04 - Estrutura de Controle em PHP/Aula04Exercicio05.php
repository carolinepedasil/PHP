<?php

// Exercício de Fixação - For

/* 
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
                    "nome" => "Weverton",
                    "idade" => "33",
                    "peso" => "87",
                    "altura" => "1.88"
                ),
                array(
                    "nome" => "Raphael Veiga",
                    "idade" => "26",
                    "peso" => "73",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Gustavo Scarpa",
                    "idade" => "27",
                    "peso" => "63",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Zé Rafael",
                    "idade" => "28",
                    "peso" => "76",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Luan",
                    "idade" => "28",
                    "peso" => "86",
                    "altura" => "1.88"
                ),
                array(
                    "nome" => "Deyverson",
                    "idade" => "30",
                    "peso" => "78",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Patrick de Paula",
                    "idade" => "22",
                    "peso" => "73",
                    "altura" => "1.80"
                ),
                array(
                    "nome" => "Rony",
                    "idade" => "26",
                    "peso" => "63",
                    "altura" => "1.68"
                ),
                array(
                    "nome" => "Felipe Melo",
                    "idade" => "38",
                    "peso" => "83",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Breno",
                    "idade" => "25",
                    "peso" => "71",
                    "altura" => "1.78"
                ),
                array(
                    "nome" => "Danilo",
                    "idade" => "20",
                    "peso" => "68",
                    "altura" => "1.78"
                )
            )
        ),
        array(
            "time" => "São Paulo",
            "jogadores" => array(
                array(
                    "nome" => "Tiago Volpi",
                    "idade" => "30",
                    "peso" => "87",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Léo",
                    "idade" => "25",
                    "peso" => "71",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Liziero",
                    "idade" => "23",
                    "peso" => "68",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Gabriel Sara",
                    "idade" => "22",
                    "peso" => "68",
                    "altura" => "1.78"
                ),
                array(
                    "nome" => "Igor Gomes",
                    "idade" => "22",
                    "peso" => "73",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Rodrigo Nestor",
                    "idade" => "21",
                    "peso" => "63",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Reinaldo",
                    "idade" => "32",
                    "peso" => "73",
                    "altura" => "1.78"
                ),
                array(
                    "nome" => "Emiliano Rigoni",
                    "idade" => "28",
                    "peso" => "68",
                    "altura" => "1.80"
                ),
                array(
                    "nome" => "Miranda",
                    "idade" => "37",
                    "peso" => "78",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Luciano",
                    "idade" => "28",
                    "peso" => "77",
                    "altura" => "1.80"
                ),
                array(
                    "nome" => "Bruno Alves",
                    "idade" => "30",
                    "peso" => "83",
                    "altura" => "1.85"
                )
            )
        ),
        array(
            "time" => "Corinthians",
            "jogadores" => array(
                array(
                    "nome" => "Cássio",
                    "idade" => "34",
                    "peso" => "92",
                    "altura" => "1.96"
                ),
                array(
                    "nome" => "Gustavo Mosquito",
                    "idade" => "24",
                    "peso" => "63",
                    "altura" => "1.68"
                ),
                array(
                    "nome" => "Gil",
                    "idade" => "34",
                    "peso" => "83",
                    "altura" => "1.88"
                ),
                array(
                    "nome" => "Fagner",
                    "idade" => "32",
                    "peso" => "67",
                    "altura" => "1.68"
                ),
                array(
                    "nome" => "Fábio Santos",
                    "idade" => "36",
                    "peso" => "77",
                    "altura" => "1.78"
                ),
                array(
                    "nome" => "Jô",
                    "idade" => "34",
                    "peso" => "78",
                    "altura" => "1.91"
                ),
                array(
                    "nome" => "Gabriel",
                    "idade" => "29",
                    "peso" => "68",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Victor Cantillo",
                    "idade" => "28",
                    "peso" => "63",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Giuliano",
                    "idade" => "31",
                    "peso" => "68",
                    "altura" => "1.70"
                ),
                array(
                    "nome" => "Renato Augusto",
                    "idade" => "33",
                    "peso" => "86",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Luan",
                    "idade" => "28",
                    "peso" => "73",
                    "altura" => "1.80"
                )
            )
        ),
        array(
            "time" => "Santos",
            "jogadores" => array(
                array(
                    "nome" => "João Paulo",
                    "idade" => "26",
                    "peso" => "78",
                    "altura" => "1.91"
                ),
                array(
                    "nome" => "Marcos Guilherme",
                    "idade" => "26",
                    "peso" => "66",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Felipe Jonatan",
                    "idade" => "23",
                    "peso" => "76",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Camacho",
                    "idade" => "31",
                    "peso" => "71",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Madson",
                    "idade" => "29",
                    "peso" => "73",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Carlos Sanchez",
                    "idade" => "36",
                    "peso" => "68",
                    "altura" => "1.75"
                ),
                array(
                    "nome" => "Marinho",
                    "idade" => "31",
                    "peso" => "68",
                    "altura" => "1.68"
                ),
                array(
                    "nome" => "Jean Mota",
                    "idade" => "28",
                    "peso" => "72",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Pará",
                    "idade" => "35",
                    "peso" => "68",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Luiz Felipe",
                    "idade" => "28",
                    "peso" => "78",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Danilo Boza",
                    "idade" => "23",
                    "peso" => "76",
                    "altura" => "1.83"
                )
            )
        ),
        array(
            "time" => "Guarani",
            "jogadores" => array(
                array(
                    "nome" => "Rafael Martins",
                    "idade" => "29",
                    "peso" => "78",
                    "altura" => "1.91"
                ),
                array(
                    "nome" => "Bruno Silva",
                    "idade" => "33",
                    "peso" => "83",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Matheus Bidu",
                    "idade" => "22",
                    "peso" => "72",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Bruno Aparecido",
                    "idade" => "29",
                    "peso" => "83",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Andrigo",
                    "idade" => "26",
                    "peso" => "71",
                    "altura" => "1.70"
                ),
                array(
                    "nome" => "Bruno Sávio",
                    "idade" => "27",
                    "peso" => "68",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Thales",
                    "idade" => "28",
                    "peso" => "78",
                    "altura" => "1.85"
                ),
                array(
                    "nome" => "Júlio César",
                    "idade" => "27",
                    "peso" => "68",
                    "altura" => "1.73"
                ),
                array(
                    "nome" => "Régis Salmazzo",
                    "idade" => "28",
                    "peso" => "66",
                    "altura" => "1.70"
                ),
                array(
                    "nome" => "Lucão",
                    "idade" => "30",
                    "peso" => "78",
                    "altura" => "1.83"
                ),
                array(
                    "nome" => "Ronaldo Alves",
                    "idade" => "32",
                    "peso" => "87",
                    "altura" => "1.88"
                )
            )
        )
    );

    // a) A quantidade de jogadores com idade inferior a 18 anos; 

    $qtdJogadoresMenores18 = 0;

    foreach($times as $time){
        foreach($time["jogadores"] as $jogador){
            if($jogador["idade"] < 18){
                $qtdJogadoresMenores18++;
            }
        }
    }

    echo "\n A quantidade de jogadores com idade inferior a 18 anos é: " . $qtdJogadoresMenores18;

    // b) A média das idades dos jogadores do Palmeiras

    $mediaIdadePalmeiras = 0;

    foreach($times as $time){
        if($time["time"] == "Palmeiras"){
            $mediaIdadePalmeiras = 0;
            foreach($time["jogadores"] as $jogador){
                $mediaIdadePalmeiras += $jogador["idade"];
            }
            $mediaIdadePalmeiras = $mediaIdadePalmeiras / count($time["jogadores"]);
        }
    }
    echo "\n A média das idades dos jogadores do Palmeiras é: " . $mediaIdadePalmeiras;

    // b) A média das idades dos jogadores do São Paulo

    $mediaIdadeSaoPaulo = 0;

    foreach($times as $time){
        if($time["time"] == "São Paulo"){
            $mediaIdadeSaoPaulo = 0;
            foreach($time["jogadores"] as $jogador){
                $mediaIdadeSaoPaulo += $jogador["idade"];
            }
            $mediaIdadeSaoPaulo = $mediaIdadeSaoPaulo / count($time["jogadores"]);
        }
    }
    echo "\n A média das idades dos jogadores do São Paulo é: " . $mediaIdadeSaoPaulo;

    // b) A média das idades dos jogadores do Corinthians

    $mediaIdadeCorinthians = 0;

    foreach($times as $time){
        if($time["time"] == "Corinthians"){
            $mediaIdadeCorinthians = 0;
            foreach($time["jogadores"] as $jogador){
                $mediaIdadeCorinthians += $jogador["idade"];
            }
            $mediaIdadeCorinthians = $mediaIdadeCorinthians / count($time["jogadores"]);
        }
    }
    echo "\n A média das idades dos jogadores do Corinthians é: " . $mediaIdadeCorinthians;

    // b) A média das idades dos jogadores do Santos

    $mediaIdadeSantos = 0;

    foreach($times as $time){
        if($time["time"] == "Santos"){
            $mediaIdadeSantos = 0;
            foreach($time["jogadores"] as $jogador){
                $mediaIdadeSantos += $jogador["idade"];
            }
            $mediaIdadeSantos = $mediaIdadeSantos / count($time["jogadores"]);
        }
    }
    echo "\n A média das idades dos jogadores do Santos é: " . $mediaIdadeSantos;

    // b) A média das idades dos jogadores do Guarani

    $mediaIdadeGuarani = 0;

    foreach($times as $time){
        if($time["time"] == "Guarani"){
            $mediaIdadeGuarani = 0;
            foreach($time["jogadores"] as $jogador){
                $mediaIdadeGuarani += $jogador["idade"];
            }
            $mediaIdadeGuarani = $mediaIdadeGuarani / count($time["jogadores"]);
        }
    }
    echo "\n A média das idades dos jogadores do Guarani é: " . $mediaIdadeGuarani;

    // c) A média das alturas de todos os jogadores do campeonato

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

    // d) A percentagem de jogadores com mais de 80 quilos entre todos os jogadores do campeonato

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