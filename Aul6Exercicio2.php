<?php

// Crie uma função que receba um valor e diga se é nulo ou não.

echo "Digite um valor: ";
$valor = fgets(STDIN);

    if($valor == null){
        echo "O valor é nulo";
    }else{
        echo "O valor não é nulo";
    }

?>
