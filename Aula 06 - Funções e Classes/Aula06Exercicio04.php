<?php

/*
    Usando as 3 funções acima, crie um aplicativo que calcula as raízes de uma equação do segundo grau.
    ax² + bx + c = 0
    Para ela existir, o coeficiente 'a' deve ser differente de zero.
    Caso o delta seja maior ou igual a zero, as raízes serão reais.
    Caso o delta seja negativo, as reais serão complexas e da forma: x + iy
*/

    echo "Digite um valor para A: ";
    $a = (float) fgets(STDIN);
    echo "Digite um valor para B: ";
    $b = (float) fgets(STDIN);
    echo "Digite um valor para C: ";
    $c = (float) fgets(STDIN);

    function calculaRaizes($a, $b, $c) {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            echo "Delta negativo, não existem raízes reais.";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "As raízes da equação são: $x1 e $x2";
        }
    }

    calculaRaizes($a, $b, $c);

?>
