<?php 
	
	class Contato{
		private $pdo;

		public function __construct(){
			$this->pdo = new PDO("mysql:dbname=crudoo;host=localhost","root","");
		}

		public function adicionar($email, $nome = ''){
			// 1 passo verificar se o email já existe no sistema
			// 2 passo adicionar

			if ($this->existeEmail($email) == false) {
				$sql = "INSERT INTO contatos (nome,email) VALUES (:nome, :email) ";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(":nome", $nome);
				$sql->bindValue(":email", $email);
				$sql->execute();

				return true;
			}else{
				return false;
			}
		}

		public function getInfo($id){
			$sql = "SELECT * FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return $sql->fetch();
			}else{
				return array();
			}
		}

		public function getNome($email){
			$sql = "SELECT nome FROM contatos WHERE email = :email ";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email", $email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$info = $sql->fetch();

				return $info['nome'];
			}else{
				return '';
			}
		}

		public function getAll(){
			$sql ="SELECT * FROM contatos";
			$sql= $this->pdo->query($sql);

			if ($sql->rowCount() > 0 ) {
				return $sql->fetchAll();
			}else{
				// como fetchAll retorna um array vamos colocar um array aqui tbm
				return array();
			}
		}

		public function editarPeloId($nome,$email,$id){
			
			if ($this->existeEmail($email) == false) {
				
	
				$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(":nome", $nome);
				$sql->bindValue(":email", $email);
				$sql->bindValue(":id", $id);
				$sql->execute();

				return true;

			}else{
				// não consegui colocar essa msg echo "Esse email já existe!";
				return false;

			}
		}

		public function editar($nome,$email){
			if ($this->existeEmail($email)) {
				$sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(":nome", $nome);
				$sql->bindValue(":email", $email);
				$sql->execute();

				return true;
			}else{
				return false;
			}
		}



		public function excluirPeloId($id){
			if ($this->existeId($id)) {
				$sql = "DELETE FROM contatos WHERE id = :id";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(":id", $id);
				$sql->execute();

				return true;
			}else{
				return false;
			}

			/*Se eu quiser excluir atraves do id uso esse aqui não esquecendo de colocar a variável $id no excluir*/
			/*$sql = "DELETE FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();*/
		}

		public function excluirPeloEmail($email){
			if ($this->existeEmail($email)) {
				$sql = "DELETE FROM contatos WHERE email = :email";
				$sql = $this->pdo->prepare($sql);
				$sql->bindValue(":email", $email);
				$sql->execute();

				return true;
			}else{
				return false;
			}

			/*Se eu quiser excluir atraves do id uso esse aqui não esquecendo de colocar a variável $id no excluir*/
			/*$sql = "DELETE FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();*/
		}

		private function existeId($id){
			$sql ="SELECT * FROM contatos WHERE id = :id";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":id",$id);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return true;
			}else{
				return false;
			}
		}

		private function existeEmail($email){
			$sql ="SELECT * FROM contatos WHERE email = :email";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(":email",$email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return true;
			}else{
				return false;
			}
		}

		
	}
	
 ?>