<?php 
	session_start();
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email = strtolower(addslashes($_POST['email']));
		$senha = md5(addslashes($_POST['senha']));

		$dns ="mysql:dbname=usuarios;host=localhost";
		$dbuser ="root";
		$dbpass ="";

		try {
			$db = new PDO($dns, $dbuser, $dbpass);

			$verif = $db->query("SELECT * FROM login WHERE email = '$email' AND senha = '$senha'");

			if ($verif->rowCount() > 0) {
				
				$dado = $verif->fetch();
				/*print_r($dado);*/
				$_SESSION['id'] = $dado['id'];
				header("Location: index.php");
			}

		} catch (PDOException $e) {
			echo "Não foi possivel a conexão!".$e->getMessage();
		}
	}
 ?>


pagina de login

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
			email:<br>
			<input type="email" name="email"><br><br>
			senha:<br>
			<input type="password" name="senha"><br><br>
			
			<input type="submit" value="Entrar">

	</form>

</body>
</html>