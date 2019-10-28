<?php 

	/**
	 * 
	 */
	class Contat{

		private $conexao;
		
		public function __construct()
		{
			$this->conexao = new PDO("mysql:dbname=crudoo;host=localhost", "root", "");
			echo "Conectado com sucesso!<br>";
		}


		public function adicionar($email,$nome = ''){

			if ($this->existeEmail($email) == false) {

				$sql = "INSERT INTO contatos (nome, email) VALUES (:nome,:email)";

				$sql = $this->conexao->prepare($sql);
				$sql->bindValue(':nome', $nome);
				$sql->bindValue(':email',$email);
				$sql->execute();
				

				echo "Usuário cadastrado com sucesso!<br>";
 				return true;
			}else{

				echo "Email já existeaa!<br> ". $email;?><br><?php
 				return false;
			}

			
		}

		public function exibirTodos(){
			$sql = "SELECT * FROM contatos";
			$sql = $this->conexao->prepare($sql);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				return $sql->fetchAll();
				
			}else{
				return '';
			}
		}


		public function atualizar($nome,$email,$id){
			if ($this->existeEmail($email) == false) {

				$sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
				$sql=$this->conexao->prepare($sql);
				$sql->bindValue(":nome",$nome);
				$sql->bindValue(":email",$email);
				$sql->bindValue(":id",$id);
				$sql->execute();

				return true;
			}else{
				return false;
				echo "Não foi possível Atualizar!";
			}
		}

		public function excluir($id){
			if ($this->existeId($id)) {
					$sql="DELETE FROM contatos WHERE id = :id";
					$sql=$this->conexao->prepare($sql);
					$sql->bindValue(':id',$id);
					$sql->execute();

					echo "Usuário excluido com sucesso!!";?><br><?php
					return true;
			}else{
				echo "Não foi possível excluir, id não existe!";?><br><?php
				return false;
			}
		}

		private function existeEmail($email){
			$sql = "SELECT * FROM contatos WHERE email = :email";
			$sql= $this->conexao->prepare($sql);
			$sql->bindValue(':email',$email);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$info = $sql->fetch();

				return true;
				/*return $info['nome'];?><br /><?php*/
				echo "Email, já existeee!";
			}else{
				return '';
				return false;
			}
		}

		public function existeId($id){
			$sql = "SELECT * FROM contatos WHERE id = :id";
			$sql=$this->conexao->prepare($sql);
			$sql->bindValue(':id',$id);
			$sql->execute();

			if ($sql->rowCount() > 0 ) {
				$info = $sql->fetch();
				return true;
			}else{
				return '';
				return false;
			}
		}
	}
 ?>
