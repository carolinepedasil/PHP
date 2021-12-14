<?php

/* 
    Crie um programa que simule o funcionamento de um caixa de supermercado. 
    O caixa fica aberto até o fim do expediente e pode processar a compra de vários clientes. 
    Cada cliente pode comprar vários itens. 
    Ao ler cada item deve ser exibida uma mensagem para o operador do caixa perguntando se há mais itens a serem processados. 
    Ao final, exiba quanto a compra custou ao cliente. 
    E então solicite do operador do caixa a informação se deseja fechar o caixa. 
    Encerre o programa quando o usuário informar que deseja fechar o caixa.
*/

    $total = 0;
    $contador = 1;
    $fechar = false;

    while($fechar == false){
        echo "Digite o nome do produto: ";
        $produto = fgets(STDIN);

        echo "Digite o valor do produto: ";
        $valor = fgets(STDIN);

        $total = $total + $valor;

        echo "Há mais itens? (S/N): ";
        $resposta = fgets(STDIN);

        if($resposta == "S" || $resposta == "s"){
            $contador++;
        }else{
            $fechar = true;
        }
    }

    echo "O total da compra foi de R$ $total.\n";
    echo "O caixa fechou após $contador cliente(s).";

?>