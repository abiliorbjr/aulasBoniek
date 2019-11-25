<?php 
	session_start();
	require 'conexao.php';

	if(isset($_GET['sair'])){
		// echo $_GET['sair'];
		session_destroy();
	}

	if (isset($_POST['email']) && !empty($_POST['email'])) {

			$emaill = addslashes(strtolower($_POST['email']));
			$senhaa = addslashes($_POST['senha']);
			
			$sql="SELECT * FROM login WHERE email = :emailll AND senha = :senhaaa";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":emailll",$emaill);
			$sql->bindValue(":senhaaa",md5($senhaa));
			$sql->execute();

			if ($sql->rowCount() > 0 ) {
					$dados = $sql->fetch();
					$_SESSION['id'] = $dados['id'];
					$_SESSION['nome'] = $dados['nome'];
					$_SESSION['email'] = $dados['email'];
					header("Location:index.php");


			}else{
				echo "Email e/ou senha incorretos!";
			}
	}else{
		echo "Digite o email e/ou senha!";
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN</title>
 </head>
 <body>
 		<form method="POST">
 			E-mail: <br>
 			<input type="email" name="email"><br>
 			Senha :<br>
 			<input type="password" name="senha"><br><br>
 			<input type="submit" value="Entrar">
 		</form>
 </body>
 </html>

