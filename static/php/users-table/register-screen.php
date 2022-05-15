<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/cadastro.css">
	<title>Cadastro</title>
</head>

<body>
	<div>
		<form action="register-back.php" method="POST">
			<div id="cadastro">


				<h1 id="cadastro_titulo">Cadastro</h1>

				<?php
				$teste = 'usuario_existe';
				if (isset($_SESSION['usuario_existe'])){
				?>
					<div id="cadastro_erro" >
						<p>ERRO: Usuário ou senha já estão sendo utilizados.</p>
					</div>
				<?php
				}
				unset($_SESSION['usuario_existe']);
				?>

				<input name="usuario" type="text" required placeholder="Nome"><br><br>
				<input name="senha" type="password" required placeholder="Senha"><br><br>
				<button type="submit" id="cadastro_botao">Cadastrar-se</button>

				<div>
					<a href="login-front.php">Já possui uma conta?</a>
				</div>

				<?php
				if (isset($_SESSION['status_cadastro'])){
				?>
					<div id="cadastro_sucesso">
						<p>Cadastro feito com sucesso! Para logar-se clique no <a href="login-front.php">link</a></p>
					</div>
				<?php
				}
				unset($_SESSION['status_cadastro']);
				?>
			</div>
		</form>
	</div>
</body>

</html>