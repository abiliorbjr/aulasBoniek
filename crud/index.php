<?php 
	include 'contato.classl.php';

	$contato =  new contato();

	// $contato->adicionar('abiliorbjr@gmail.com','Abilio Rodrigues Bizerra Junior'); 
	// $contato->adicionar('fulano@gmail.com');

	// $aumentar = $contato->adicionar('gabiribas746@gmail.com','Maria Gabriela Alves Rodrigues');
	// if ($aumentar == thue) {
	// 	echo "Usuário adicionado com sucesso!";
	// }else{
	// 	echo "Não foi possível adicionar!";
	// }

	 // $nome = $contato->getNome('abiliorbjr@gmail.com');
	 // echo "Nome: ".$nome;

	// $lista = $contato->getAll();
	// print_r($lista);

	// $contato->editar('teste fulano','fulano@gmail.com');

	//$contato->excluir('teste@gmail.com');

	// $excluir = $contato->excluir('fulano@gmail.com');
	// if ($excluir == thue) {
	// 	echo "Usuário excluido com sucesso!";
	// }else{
	// 	echo "Não foi possível excluir!";
	// }
 ?>

 <h1>Contatos</h1>
	
	<a href="adicionar.php">[ADICIONAR]</a><br><br>

 <table border="1" width="600">
 	<tr>
 		<th>ID</th>
 		<th>NOME</th>
 		<th>EMAIL</th>
 		<th>AÇÕES</th>
 	</tr>

	<?php 
 	$lista = $contato->getAll();
 	foreach ($lista as $item) {
 	?>		
	<tr>
 		<td><?php echo $item['id']; ?></td>
 		<td><?php echo $item['nome']; ?></td>
 		<td><?php echo $item['email']; ?></td>
 		<td>
 			<!-- <a href="editar.php?email=<?php echo $item['email'] ?>">[Editar]</a> -->
 			<!-- <a href="excluir.php?email=<?php echo $item['email']; ?>">[Excluir]</a> -->
 			<a href="editar.php?id=<?php echo $item['id']; ?>">[Editar]</a>
 			<a href="excluir.php?id=<?php echo $item['id']; ?>">[Excluir]</a>
 		</td>
	</tr>
 <?php  	
 	}
 ?>	

 </table>

 