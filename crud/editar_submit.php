<?php 
	include 'contato.classl.php';
	$contato = new Contato();

	if (!empty($_POST['id'])) {
		$nome = $_POST['nome'];
		$id = $_POST['id'];

		$contato->editarPeloId($nome,$id);

		header("Location:index.php");
	}
 ?>