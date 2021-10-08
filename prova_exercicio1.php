/*
  Crie uma função em PHP que receba o código correspondente ao cargo de um funcionário e seu salário atual 
  e moste o CARGO, o VALOR DO AUMENTO em reais e seu NOVO SALÁRIO.
  Os cargos estão na tabela a seguir:
  Utilize em algum trecho do algoritmo, a estrutura de repetição Switch/Case. 
  Você deverá incluir na resposta a função e uma chamada para a função.
*/

<?php

function calculaAumento($codigo, $salario)
{
$cargo = "";
$novoSalario = 0;

    switch($codigo){
        case 1:
            $cargo + "Escriturario";
            $novoSalario = $salario * 1.5;
            $aumento = $salario * 0.5;
            break;
        case 2:
            $cargo = "Secretário";
            $novoSalario = $salario * 1.35;
            $aumento = $salario * 0.35;
            break;
        
        case 3:
            $cargo = "Caixa";
            $novoSalario = $salario * 1.20;
            $aumento = $salario * 0.2;
            break;
        case 4:
            $cargo = "Diretor";
            $novoSalario = $salario;
            $aumento = 0;
            break;  
        default:
            echo "Opção Inválida.";
            break;          

    }
    echo "O Cargo é $cargo, o valor do aumento é $aumento e o salário atualizado é $novoSalario";

}

calculaAumento(1, 3000);

?>
