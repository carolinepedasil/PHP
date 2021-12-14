<?php

// Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor.

echo "Digite o primeiro número: ";
$numero1 = fgets(STDIN);
echo "Digite o segundo número: ";
$numero2 = fgets(STDIN);

    if($numero1 > $numero2){
        echo "O maior número é $numero1";
    }else{
        echo "O maior número é $numero2";
    }

?>
