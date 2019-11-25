<?php 
		session_start();

		// require 'conexao.php';

		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			echo "Obrigado meu Deus!"; 
			?> <br> <?php 
			
			echo "Id: " .$_SESSION['id']. " E-mail: ".$_SESSION['email'];
			?>
			<a href="login.php?sair=true">Sair</a>

			<?php
			//session_destroy();
			
		}else{
			header("Location:login.php");

		}
 ?>