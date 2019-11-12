<?php 
	try {
		$pdo = new PDO("mysql:dbname=usuarios;host=localhost","root","");
	} catch (PDOException $e) {
		echo "Erro ao conectar: ".$e->getMessage();
		exit;
	}
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = addslashes(strtolower($_POST['email']));
			$senha = addslashes($_POST['senha']);

			$sql = "SELECT * FROM login WHERE email = :email AND senha = :senha";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":email",$email);
			$sql->bindValue(":senha",md5($senha));
			$sql->execute();

			if ($sql->rowCount() > 0) {
				echo "Usuário logado";
			}else{
				echo "E-mail e/ou senha estão errados!";
			}
		}else{
			echo "Digite um E-mail e/ ou senha!";
		}

 ?>
