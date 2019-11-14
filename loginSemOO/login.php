<?php 
	session_start();	
 ?>

 <h1>Login</h1>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>LOGIN</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<form action="conexao.php" method="POST">
 		E-mail:
 		<input type="email" name="email"><br>
 		Senha :
 		<input type="password" name="senha"><br>
 		<input type="submit" value="Entrar">

 	</form>
 </body>
 </html>
