<?php

if(isset($_POST["anoNascto"])){

    $anoNascimnto = $_POST["anoNascto"];
    $anoIngresso = $_POST["anoIngresso"];;
    $anoAtual = 2021;
    $idade = $anoAtual - $anoNascimento;
    $tempodeTrabalho = $anoAtual - $anoIngresso;


    if ($idade >= 65){
        echo "Requer Aposentadoria";
    } else if ($tempodeTrabalho >=30){
        echo "Requer Aposentadoria";
    } elseif ($idade >=60 && $tempodeTrabalho >=25){
        echo "Requer Aposentadoria";
    } else {
        echo "Não requer aposentadoria";
    }
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculaAposentadoria</title>
</head>
<body>
        <form method="POST" action="prova3.php">
        <label for="anoNascto">Ano Nascimento </label>
        <input type="text" name="anoNascto" id="anoNascto">

        <label for="anoNascto">Ano Ingresso </label>
        <input type="text" name="anoIngresso" id="anoIngresso">

        <input type="submit" value="Calcular"/>
        </form>

</body>
</html>
