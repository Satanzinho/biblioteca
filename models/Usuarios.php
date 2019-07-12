<?php 
class Usuarios extends Model{
	public function cadastrarUsuarios($nome, $email, $senha){
		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false;
		}else{
			$sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", $senha);
			$sql->execute();
			return true;
		}
	}
	public function validarCadastro($email, $senha){
		$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();
		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$_SESSION['id'] = $sql['id'];
			return true;
		}else{
			return false;
		}
	}
	public function getNome($id){
		$sql = "SELECT nome FROM usuarios WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			$nome = $sql['nome'];
			return $nome;
		}else{
			header("Location: ".BASE_URL."login/cadastro");
			exit;
		}
	}
}