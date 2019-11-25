<?php 
	session_start();
	require'usuario.class.php';
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>CRUD</title>
	<!-- <style type="text/css">
		.row [class^=col-], .row .col{
			background-color: #DDD;
			border: 1px solid #000;
		}
		.row{
			background-color: #FF2298;
			padding: 10px;
		}
	</style> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="estilo.css">
	
</head>
<body>
	<!-- .divnomeDaClasse -->
	 <div class="container" style="background-color: #6495ED">
	 	<div>
	 		<form action="usuario.class.php" method="POST">
	 			E-mail:<br>
	 			<input type="email" name="email"><br>
	 			Senha:<br>
	 			<input type="password" name="senha"><br><br>
	 			<input type="submit" value="Entrar">
	 		</form>
	 	</div>	
	</div>
	<!-- esse script poderia ser colocado no meta, mas aqui ele carrega mais rápido -->
	<script type="text/javascript" src="../bootstrap4/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../bootstrap4/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>