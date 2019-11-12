<?php 
		class Contato{

			private $pdo;
			public $emaill = addslashes(strtolower($_POST['email']));
			public $senhaa = addslashes($_POST['senha']);
			
				public function __construct(){
					$this->pdo = new PDO("mysql:dbname=usuarios;host=localhost","root","");
					echo "Conectado com sucesso!";
				}

			public function logar($emaill,$senhaa){
				if (isset($_POST['email']) && !empty($_POST['email'])){

						$sql = ("SELECT * FROM login WHERE email = :emaill AND senha = :senhaa");
						$sql= $this->pdo->prepare($sql);
						$sql->bindValue(":emaill",$emaill);
						$sql->bindValue(":senhaa",md5($senhaa));
						$sql->execute();


						if ($sql->rowCount() > 0 ) {
								$dados = $sql->fetch();
								$_SESSION['id'] = $dados['id'];
								header("location:index.php");	
						}else{
							header("Location:login.php");
						}
				}
			}
			

			
		}
 ?>