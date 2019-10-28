<?php 
	try {
		$conexao="mysql:dbname=projeto_permissoes; host=localhost";
		$user = "root";
		$pass = "";

		$pdoo = new PDO($conexao,$user,$pass);

		echo "Conectado com sucesso conexao!";
	} catch (PDOException $e) {
		echo "Erro ao conectar".$e->getMessage();
	}
 ?>