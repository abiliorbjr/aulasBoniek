<?php 
	include 'contato.classl.php';
	$contato = new Contato();
/*nessa página estamos mandando somente os dados para editar.php*/ 
	if (!empty($_POST['id'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$id = $_POST['id'];

		if (!empty($email)) {
			$contato->editarPeloId($nome,$email,$id);
		}

		

		header("Location:index.php");
	}
 ?>