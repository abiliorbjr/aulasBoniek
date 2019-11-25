<?php 
	try {
		$pdo = new PDO("mysql:dbname=usuarios; host=localhost","root","");
		echo "Conectado com sucesso!<br>";
	} catch (PDOException $e) {
		echo "Erro ao conectar: ".$e->getMessage();
	}

 ?>