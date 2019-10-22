<?php 

	
	require 'conexao.php';


	if (!empty($_GET['id'])) {
		$id = intval($_GET['id']);

		$sql = "UPDATE login SET status = '0' WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id",$id);
		$sql->execute();
		echo"Foi deletado com sucesso!";

	}


	header("Location:index.php");
		exit;
 ?>