
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
 	<title>Página de Login</title>
 	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
 	<link rel="stylesheet" href="estilo.css">
 </head>
 <body>
<div class="container">
	<!-- <h1>Login</h1> -->
<?php 
	session_start();
	require 'conexao.php';

	if (isset($_POST['email']) && !empty($_POST['email'])) {

			$emaill = addslashes(strtolower($_POST['email']));
			$senhaa = addslashes($_POST['senha']);

			$sql = "SELECT * FROM login WHERE email = :ema AND senha = :sen AND status = 1";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":ema",$emaill);
			$sql->bindValue(":sen",md5($senhaa));

			$sql->execute();

			if ($sql->rowCount() > 0) {

				$dados = $sql->fetch();
				$_SESSION['id'] = $dados['id'];
				header("Location:index.php");

			}else{
				$dados = $sql->fetch();
				$_SESSION['id'] = $dados['id'];
				echo "E-mail e/ou senha incorretos!";
				echo var_dump($dados);
			}

		}else{
			// echo "Digite o email para proseguir!";
		}	
 ?>

 
 	
	 	<form method="POST" accept-charset="utf-8" class="form-login">
	 		<h2 class="form-login-heading">Entre com o usuário</h2>
	
	 		<label for="inputEmail">E-mail:</label>
	<div class="blocoIcones">
	 		<input type="email" id="imputEmail"  name="email" class="form-control" placeholder="Digite seu email" required autofocus>
	</div>
	 		<label for="inputSenha">Senha :</label>
	 		<input type="password" id="inputSenha" name="senha" class="form-control"  placeholder="Digite sua senha" required><br>
		

	 		<div class="checkbox">
	 			<label>
	 				<input type="checkbox" value="esqueciSenha">Esqueci a senha
	 			</label>
	 		</div>
	 		<button type="submit" class="btn btn-primary btn-block">Entrar</button>

	 	</form>
	</div>
 	<script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
 		<script src="bootstrap4/js/popper.min.js"></script>
 		<script src="bootstrap4/js/bootstrap.min.js"></script>
 </body>
 </html>
