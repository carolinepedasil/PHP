<?php

// Crie uma função em linguagem PHP que receba 2 números e retorne o menor valor.

echo "Digite o primeiro número: ";
$numero1 = fgets(STDIN);
echo "Digite o segundo número: ";
$numero2 = fgets(STDIN);

    if($numero1 < $numero2){
        echo "O menor número é $numero1";
    }else{
        echo "O menor número é $numero2";
    }

?>
