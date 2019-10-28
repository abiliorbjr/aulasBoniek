<?php 

	class Usuarios{
		private $pdo;
		private $id;
		private $permissoes;

		public function __construct($pdoo){
			$this->pdo = $pdoo;
		}
		public function fazerLogin($email, $senha){
			$sql ="SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email",$email);
			$sql->bindValue(":senha",$senha);
			$sql->execute();

			if ($sql->rowCount() > 0 ) {
				$sql = $sql->fetch();

				$_SESSION['logado'] = $sql['id'];

				return true;

			}

			return false;
		}

		public function setUsuario($id){
			$this->id = $id;

			$sql = "SELECT * FROM usuarios WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				$this->permissoes = explode(',',$sql['permissoes']);
			}
		}
	}
 ?>