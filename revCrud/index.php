<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<title>CRUD</title>
	<style type="text/css">
		.row [class^=col-], .row .col{
			background-color: #DDD;
			border: 1px solid #000;
		}
		.row{
			background-color: #FF2298;
			padding: 10px;
		}
	</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="/bootstrap4/css/bootstrap.min.css"/>
	
</head>
<body>
	<!-- .divnomeDaClasse -->
	 <div class="container" style="background-color: #FF1111">
	 		<div class="row justify-content-center"> <!-- esse comando alinha a esquerda,start na esquerda, center no centro, end na direita, around elas ficam em volta, between espalhado mas o meio fica certo-->
					<!-- para alinhar verticalmente usamos align-items-center -->

	 			<div class="col-3" style="background-color: #00FF00">Primeira</div>
	 			<div class="col-sm-2 order-last">Segunda</div>
	 			<div class="col-3">terceira</div>
	 			<div class="w-100"></div>
	 			<!-- <div class="col-sm" style="background-color: #00FF00">quarta</div> -->
	 			
	 		</div>
			<!-- <h1>Abílio Rodrigues Bizerra Júnior</h1> -->
	</div>

	<!-- esse script poderia ser colocado no meta, mas aqui ele carrega mais rápido -->
	<script type="text/javascript" src="/bootstrap4/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/bootstrap4/js/jquery.min.js"></script>
	<script type="text/javascript" src="/bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>



<?php 
	include 'usuarios.class.php';
	$contato = new Contat();

	  // $contato->adicionar('tewste@gmail.com','Teste teste');
	// $contato->atualizar('otimo Junior','otimo@gmail.com','11');
	 $contato->excluir(14);

	$lista = $contato->exibirTodos();
	foreach ($lista as $itens) {
	?>
		<tr>
			<td><?php echo $itens['id']; ?></td>
			<td><?php echo $itens['nome']; ?></td>
			<td><?php echo $itens['email']; ?></td>
		</tr>
		<br>
	<?php  	
	}
?>