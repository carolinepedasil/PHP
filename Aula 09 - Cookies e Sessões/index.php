<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN & CADASTRO</title>
</head>
<body>
	<h1>Página de Login</h1>
	<form method="post" action="login.php">
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
			<br>
			<button type="submit" class="btn btn-primary" id='botao'>Entrar</button>
			<br>
			<label for="senha">Ainda não é cadastrado? Faça seu cadastro agora:</label><br>
			<button type="submit" class="btn btn-primary" value="SIM" id='entrarCadastro'>Cadastrar</button>
		</div>
	</form>
</body>
</html>