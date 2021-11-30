<?php

// Crie uma função em linguagem PHP que receba 3 números e retorne o maior valor, use a função da questão 5.

echo "Digite o primeiro número: ";
$numero1 = fgets(STDIN);
echo "Digite o segundo número: ";
$numero2 = fgets(STDIN);
echo "Digite o terceiro número: ";
$numero3 = fgets(STDIN);

    if($numero1 > $numero2 && $numero1 > $numero3){
        echo "O maior número é $numero1";
    }elseif($numero2 > $numero1 && $numero2 > $numero3){
        echo "O maior número é $numero2";
    }else{
        echo "O maior número é $numero3";
    }

?>
