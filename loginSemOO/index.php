

<?php 
	session_start();
	
?>

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
					if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
						// header("Location:index.php");		
						 echo "Obrigado meu Deus!<br>";

						 echo '<a href="sair.php?token='.md5(session_id()).'"><button>Logout</button></a>';
				?>
					<!-- <a href="sair.php"><button>Sair</button></a>		  -->
				<?php 
					}else{
						header("Location:login.php");
					}

				 ?>

 		</div>

 		<script src="bootstrap4/js/jquery-3.2.1.min.js"></script>
 		<script src="bootstrap4/js/popper.min.js"></script>
 		<script src="bootstrap4/js/bootstrap.min.js"></script>

	</body>
 </html>