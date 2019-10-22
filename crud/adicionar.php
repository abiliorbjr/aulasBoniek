<?php 
	
 ?>

 <h1>Adicionar</h1>

 <form action="adicionar_submit.php" method="POST">
 	Nome:<br>
 	<input type="text" name="nome"><br><br>
 	E-mail:<br>
 	<input type="email" name="email"><br><br>

 	<input type="submit" value="Adicionar">
 </form>

 <!-- Podemos fazer esse adicionar de duas formas com o action e sem
 como o action. com o action enviamos para outro arquivo e sem temo que fazer uma verificaçao  -->


<!-- aqui e sem o action -->
<?php   
/*if (!empty($_POST['nome'])) {
	 	<h1>Dados vindo para cá</h1>
		Nome: <?php echo $_POST['nome']; ?><br>
		E-mail: <?php echo $_POST['email']; ?><br>
}
*/

?>