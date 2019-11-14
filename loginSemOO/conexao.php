<?php 
	try {
		$pdo = new PDO("mysql:dbname=usuarios;host=localhost","root","");
		echo "Conectado com sucesso";
	} catch (PDOException $e) {
		echo "Erro ao conectar: ".$e->getMessage();
	}

	if (isset($_POST['email']) && !empty($_POST['email'])) {

			$emaill=addslashes(strtolower($_POST['email']));
			$senhaa=addslashes($_POST['senha']);

			$sql = ("SELECT * FROM login WHERE email = :emaill AND senha = :senhaa ");
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":emaill",$emaill);
			$sql->bindValue(":senhaa",$senhaa);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$info = $sql->fetch();
				$_SESSION['id'] = $info['id'];
				header("Location:index.php");
			}else{
				echo "Usuario e/ou senha errados!";
				header("Location:login.php");
			}
	}else{
		echo "Por favor preencher o email";
	}
 ?>