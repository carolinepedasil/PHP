<?php
$email2 = (isset($_POST['email'])) ? $_POST['email'] : '';
$senha2 = (isset($_POST['senha'])) ? $_POST['senha'] : '';
if(($email == $email2) and ($senha == $senha2 ))
{
	?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login com Cookie</title>
</head>
<body>
	<fieldset>
		<h1>Bem Vindo</h1>
		<form method="" action="">
			<h3>Seus dados cadastrados são:</h3>
<?php   
    echo"nome: ". $_COOKIE["CookieNome"]."<br>";
	echo"E-mail: ".$_COOKIE["CookieEmail"]."<br>";
	echo"Usuario: ". $_COOKIE["CookieUsuario"]."<br>";
	echo"Senha :". $_COOKIE["CookieSenha"]."<br>";	 
?>   		     
	
		</form>
	</fieldset>
</body>
</html>

<?php
}