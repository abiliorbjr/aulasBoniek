<?php 
	session_start();

	if (!empty($_POST['n'])) {

		$n = intval($_POST['n']);

		if ($_SESSION['numverificador'] == $n) {
			echo"HUMANO!";
		}else{
			echo "FAKE!";
		}
	}else{
		header("Location:index.php");
	}
 ?>