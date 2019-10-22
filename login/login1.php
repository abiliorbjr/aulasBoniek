<?php 
	session_start();
	require_once'conexao.php';
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email = strtolower(addslashes($_POST['email']));
		$senha = md5(addslashes($_POST['senha']));


		/*
		$dns = "mysql:dbname=usuarios;host=localhost";
		$dbuser="root";
		$dbpass="";*/


		/*try {
			$db = new PDO($dns,$dbuser,$dbpass);*/
			

			$verif=$pdo->query("SELECT * FROM login WHERE email='$email' AND senha='$senha'");
			

			if ($verif->rowCount() > 0) {

					$dado = $verif->fetch();
					print_r($dado);
					$_SESSION['id']=$dado['id'];
					header("Location:index1.php");
			}else{
				echo"Usuário ou Senha inválidos!";
			}


		/*} catch (PDOException $e) {
			echo "Erro ao conectar".$e->getMessage();
		}
	}else{
	 	echo"Usuário ou senha incorretos! ";*/
	}
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
 	<title>Página de Login</title>
 	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
 </head>
 <body>
 		<script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
 		<script src="bootstrap4/js/popper.min.js"></script>
 		<script src="bootstrap4/js/bootstrap.min.js"></script>
 		<div class = "form-group"  method="POST" accept-charset="utf-8">
 			Email:
 			<input type="email" name="email"><br><br>
 			Senha:
 			<input type="password" name="senha"><br><br>
 			<input type="submit" value ="Enviar">
 		</div>
 </body>
 </html>

