<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;
	private $endereco;
	private $nascimento;
	private $password;

 
 	public function setNome($nome){
		$this->nome = $nome;
	}

	

	public function setEmail($email){
		$this->email = $email;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function setNascimento($nascimento){
		$this->nascimento = $nascimento;
	}

	public function setPassword($password){
		$this->password = $password;
	}

    

    
	public function insertIndex(){

		$sql  = "INSERT INTO $this->table (nome, email) VALUES (:nome, :email)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		 
		return $stmt->execute(); 

	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email ,endereco,nascimento,password) VALUES (:nome, :email , :endereco,:nascimento,:password)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':nascimento', $this->nascimento);
		$stmt->bindParam(':password', $this->password);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}