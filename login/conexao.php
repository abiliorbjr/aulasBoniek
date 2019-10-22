<?php 

		$conexao = "mysql:dbname=usuarios;host:localhost";
		$user ="root";
		$pass = "";

	try {
			$pdo = new PDO($conexao,$user,$pass);
			echo "Conectado com sucesso!";
			/*$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); para ver aonde está  erro*/
	} catch (PDOException $e) {
		echo "Erro ao conectar!".$e->getMessage();
	}
 ?>