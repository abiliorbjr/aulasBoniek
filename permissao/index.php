<?php 
	session_start();
	require 'conexao.php';
	require 'usuarios.class.php';

	if (!isset($_SESSION['logado'])) {
		header("Location: login.php");
		exit;
	}

	$usuarios = new Usuarios($pdo);
	$usuarios->setUsuarios($_SESSION['logado']);
 ?>
 <h1>Sistema</h1>