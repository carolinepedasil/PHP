<?php

/*
    Utilizando Formulário, crie um programa que receba o nome e sobrenome em dois input 
    e depois exiba o nome e o sobrenome concatenado em outra input.
*/

    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $nomeCompleto = $nome . " " . $sobrenome;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>
    <form action="Aula05Exercicio03.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <br>
        <button type="submit">Enviar</button>
    </form>
    <p>
        <?php
            echo "O nome completo é: $nomeCompleto";
        ?>
    </p>
</body>
</html>