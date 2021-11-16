<?php

// Crie uma função que receba três valores, 'a', 'b' e 'c', que são os coeficientes de uma equeção do segundo grau e retorne o valor do delta, que é dado por 'b² - 4ac'.

$a;
$b;
$c;
$delta;

echo "Digite um valor para A: ";
$a = (float) fgets(STDIN);
echo "Digite um valor para B: ";
$b = (float) fgets(STDIN);
echo "Digite um valor para C: ";
$c = (float) fgets(STDIN);

    $delta = ($b * $b) - 4 * ($a * $c);
    echo "O valor de delta é: $delta";

?>
