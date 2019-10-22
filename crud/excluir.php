<?php 
	include 'contato.classl.php';
	$contato = new Contato();

	// vamos fazer uma verificação pra saber se os dados não estão em branco
	// echo "Entrando no excluir";

	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		
		$contato->excluirPeloId($id);

		
	}
		header("Location:index.php");
	
 