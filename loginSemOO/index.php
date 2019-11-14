<?php 
	session_start();
	require 'conexao.php';

	if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
		header("Location:index.php");		
		 echo "Obrigado meu Deus!";
	}else{
		header("Location:login.php");
	}

 ?>