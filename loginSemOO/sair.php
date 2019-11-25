<!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
 	<title>Página de Login</title>
 	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
 </head>
 	<body>

 		<div class="container">

				<?php 
					session_start();
					$token = md5(session_id());
					if (isset($_GET['token']) && $_GET['token'] === $token) {
						// limpe tudo que for necessário na saída.
				   		// Eu geralmente não destruo a seção, mas invalido os dados da mesma
				   		// para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
				   		session_destroy();
				   		header("Location:index.php");
				   		exit();
					}else{
						echo '<a href=sair.php?token='.$token.'><button>Confirmar logout</button> </a>';
					}
				 ?>

		</div>
			<script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
 			<script src="bootstrap4/js/popper.min.js"></script>
 			<script src="bootstrap4/js/bootstrap.min.js"></script>
	</body>

</html>