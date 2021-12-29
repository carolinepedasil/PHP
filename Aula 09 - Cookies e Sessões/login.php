<?php 
session_start();
$nome = (isset($_POST['nome'])) ? $_POST['nome'] :'';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] :'';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
$confirmar = $_POST['confirmar'];

 if ($confirmar == "SIM" )
 {
		$expira = time() + 60*60*24*30; 
		
		setCookie('CookieNome',($nome), $expira);
		setCookie('CookieUsuario', ($usuario), $expira); 
		setCookie('CookieEmail',($email), $expira);
		setCookie('CookieSenha', ($senha), $expira); 

		echo "<script>window.location = 'index.php'</script>";

 }
 
 if(!empty($email) && !empty($senha) )
			{
		   $expira = time() + 60*60*24*30; 
		    setCookie('CookieEmail',($email), $expira);
		    setCookie('CookieSenha', ($senha), $expira); 
		    echo "<script>window.location = 'resultado.php'</script>";

			}	
			if(empty($email) && empty($senha))
			{
				echo "<script>window.location = 'cadastro.php'</script>";
			}
			else 
			{
				echo "<script>window.location = 'index.php'</script>";	
			}