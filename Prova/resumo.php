<?php
echo "Olá";

echo "digite um numero: "; 

$num1 = fgets(STDIN); //pegar info digitada pelo usuario; string, texto
echo $num1;
$num2 = (float)fgets(STDIN); //definir a variavel(int, float...) para manipular numeros
echo $num2;

echo gettype($num1);
echo gettype($num2);

$numeral = readline("Digite o tipo numerico:");
echo $numeral;

//              criação de array             //
//      |Corsa|Vectra|Fusion|Megane|Gol|     //
$carros = array('Corsa','vectra','fusion', "megane" => "gol");
echo $carros[1]; //resultado 'vectra'
echo $carros[megane]; //resultado 'gol'

//            adicionar indice no vetor      //
$carros[] = $celta;
$carros.append($celta);

//               definindo função            //
global $num = 5000; //uso de 'global' para ser lido na função fora da main

function funcao(){
    $num+=999;
    echo $num;
}
echo $num;
funcao();
//              uso de if                    //
if($num1 <= 10){
    echo "Errou";
    echo "Mama nois";
endif;
}
//  condicionamneto duplo    //
if(num1 >=18)
    if(num2 <=5)
    echo "pode mamar";
else echo "nao pode mamar";
//  switch  //
//categorias - A - 8,00 - B - 10,00 - C -12,00
$categoria = 'A'
switch($variavel){
    case 'A' :
        $preco = 8;
        break;
    case 'B' :
        $preco = 10;
        break;
    case 'C' :
        $preco = 12;
        break;
    default:
        echo "Categoria não existente";
}
//      percorrer array     //
$frutas = array("uva","maca","morango");

foreach($frutas as $fruta){
    echo $fruta . "<br>"; //uva
}                         //maca  
                          //morango  
        //    OU    //
$agenda = ["nome"=>"Cleber","telefone"=>"(19)99568-7412"];

foreach($agenda as $indice=>$contato){
    echo "$indice = $contato <br>";     //nome =cleber
    if($contato == "Cleber")            //telefone=(19)99568-7412
        break 2;
}

//            função sem parametro / retorno        //
function somar(){
    $num1 = 10;
    $num2 = 20;
    $resultado = $num1 + $num2;
    echo $resultado;
}
//          chamada para a função       //
soma();

//          função com parametro e s/ retorno       //

function soma1($num1, $num2){
    $resultado = $num1 + $num2;
    echo $resultado. "<br>";
}
soma1(10, 5);
soma1(15, 5);
soma1(10, 9);

//  $a = 75;
//  $b = 50;
//  soma1($a, $b);
//          função s/ parametro c/ retorno      //
function soma2(){
    $num1 = 20;
    $num2 = 30;
    $resultado = $num1 + $num2;
    return $resultado;
}
echo soma2(); //50
echo "<br> O resultado é". soma2(); // O resultado é 50

$x = soma2() * 5; //pegar resultado e multiplicar por 5
echo "<br> $x";

//       função c/ parametro e retorno        //
function soma3($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

echo soma3(50,45). "<br>";

echo soma3(10,6). "- resultado da soma";

$soma = soma3(15.5,8);

//      passagem de parametro com rerferencia       //
function mudaValor(&$num){
    $num = $num * 2;
    return $num;
}
echo "Variavel x antes antes da chamada da função: " . $x. "<br>"; //10
echo "Chamada da função" . mudaValor($x) . "<br>"; //20  
echo "Variavel x depois da chamada da função" . $x . "<br>";

//         importar, igual java     //

incluide    "teste1.php"; //nome do arquivo a esquerda

soma();
echo $x;

?>
//         Função para munipulação      //  
<?php

$nome = "Fatec";

$respostas = readline("Digite a opção");
while($respostas == 's' || $respostas == 'S'){}

//      maiuscula       //
$respostas = strtoupper($respostas);
while($respostas == 'S'){}

//      minuscula       //
$respostas = strtolower($respostas);
while($respostas == 's'){}

//      só o 1° caractere       //
$string = "fabio da silva";
$string = ucfirst($string);
echo $string;

//       1° caracter de cada frase      //
$string = "fabio da silva";
$string = ucwords($string);
echo $string;

//       retirar espaços das strings        //
$respostas = ltrim($respostas);

//      Criptografia de dados MD5       //
$senha = "123345";
$senha = md5($senha);
echo $senha; // 099xpq456sdf8714sc45sad1525 (EXEMPLO DE CRIPTOGRAFIA)

if ($senha == md5("123345"))    //confirmar se esta msm pegando a senha //
echo $senha;

//        Criptografia de dados usando uma chave        //
$chave = str_shuffle("Qualquer texto");
$chave = rand(10,23); //min e max de numeros//
$senhanova = 54321;
$senhanova = crypt(&senhanova, $chave); //2 parametros - 1 senha, 2 chaves

echo "Senha c md5=$senha - senha com crypt = $senhanova";

//      Cript em 128bits    //
$senhaatual = "54321";
$senhaatual = hash("sha512", $senhaatual); //1° tipo da cripto 2° string

// substituir conteudo de uma string
$fruta = "banana prata";
$fruta = str_replace("prata","D'Terra",$fruta);//1° encontrar 2° substituir 3° variavel

echo $fruta;

//      quantidade de caracteres de uma string//
$nome = "Anivia";
$qnt = strlen($nome);

if($qnt > 3){
    echo $nome;
}

//      pegar partes de uma string      //
$nome = "Sandy Junior";
$sobrenome = substr($nome,7,7);//1°variavel 2°inicio 3°fim
$sobrenome = substr($nome,-7);//de tras pr frente

//          unset = usado para tirar o valor atribuido               //
$cidade = "Campinas";
unset($cidade);
echo $cidade; //ERRO undefined variable

//      converter string em vetor- explode()       //
$nomes = "Trinda,Master,Pedregulho,Mudinha,Lulu,Jaime";
$nomes = ltrim($nomes);
$vetorNomes = explode(",",$nomes);//1° delimitador 2° variavel
echo $vetorNomes[5];

//      converter string em vetor- implode()        //
$nomes = implode(",",$vetorNomes);

//      função p/ manipulação de vetores // declaração de vetor
$vetor=[];
$vetor=array();

//       declaração de matriz       //
$matriz = [[]]; //1°linha 2° coluna 
$matriz = array(array());

$carros = ["Fusca", "Celta", "Palio"];
// 0 1 2
$carros = ["VW"=>"Fusca", "GM"=>"Celta", "FT"=>"Palio", "Uno"];
//VW GM FT 0

//      qnt de elementos no vetor       //
echo count($carros);
$total = count($carros); //retorna inteiro

//      verificar se o vetor é valido       //
if(is_array($carros)){
//verificar se a chave existe//
    if(isset($carros["VW"])){
        if(isset($carros)){} //verificar se todo o vetor existe
    }
}
//      Ordenar  //     sort//
$numeros=[5,3,6,1,8,2];
$nomes = ["Ammumu", "J4", "Rammus", "Soraka"];
sort($numeros);
print_r($numeros);

//classificar pela chave//
ksort($carros);
print_r($carros);

//classificar por valor mantendo a chave//
asort($nomes);
print_r($nomes);

//embaralhar vetor//
$sorteio = [1,2,3,4,5,6];
shuffle($sorteio);

//adicionar valor ao vetor//
array_push($sorteio, 60); // 1°vertor 2°valor

//dividir vetor em partes//
print_r(array_chunk($sorteio,5));

//      combinar vetores      //
$alunos = array_combine($nomes, $idade);
print_r($alunos);

echo pi();

?>
