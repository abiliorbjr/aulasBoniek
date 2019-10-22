<?php 
	try {
		$conexao="mysql:dbname=projeto_permissoes; host=localhost";
		$user = "root";
		$pass = "";

		$pdo = new PDO($conexao,$user,$pass);

		echo "Conectado com sucesso!";
	} catch (PDOException $e) {
		echo "Erro ao conectar".$e->getMessage();
	}
 ?>