<!-- <h1>Dados vindo para cá</h1>
Nome: <php/* echo $_POST['nome']; ?><br>
E-mail: <php echo $_POST['email'];?>*/><br> -->

<?php 
	include 'contato.classl.php';
	$contato =  new contato();
	if (!empty($_POST['email'])) {
		$nome = $_POST['nome'];
		$email = $_POST['email'];

		$contato->adicionar($email,$nome);

		header("Location:index.php");
	}
 ?>
