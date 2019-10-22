<?php 
	$conexao = "mysql:dbname=usuarios;host:localhost";
	$user = "root";
	$pass="";

	try {
		$pdo = new PDO($conexao, $user, $pass);
		echo"Conectado com sucesso!!!";
	} catch (PDOException $e) {
		echo "Erro ao conectar".$e->getMessage();
	}

 ?>