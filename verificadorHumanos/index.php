
<?php 
	session_start();
	$n1 = rand(0,10);
	$n2 = rand(0,10);

	$_SESSION['numverificador'] = $n1 + $n2; /*aqui eu poderia salvar um numero de cada vez, mas como eu só vou precisar do resultado*/
 ?>
<h2>Verificador de Humanos</h2>

<form action="verificador.php" method="POST">
	<?php echo $n1; ?> + <?php echo $n2; ?> =
	<input type="hidden" name="n1" value="5">

	<input type="hidden" name="n2" value="3">

	<input type="number" name="n"/>

	<input type="submit" value="Verificar">

</form>