<?php 
	if (isset($_GET['nome']) && !empty($_GET['nome'])) {

		$nome = addslashes($_GET['nome']);

		echo "Olá, ".$nome." , como vai. ";
	}else{
		header("Location:index.php");
	}
 ?>