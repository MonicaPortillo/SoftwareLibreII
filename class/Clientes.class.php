<?php

class Clientes {
		public $id_cliente;
		public $nombre;
		public $apellido;
		public $direccion;
		public $dui;
		public $tel;
		public $email;
                
                public function __construct($_id_cliente=NULL, $_nombre=NULL, $_apellido=NULL, $_direccion=NULL, $_tel=NULL, $_dui=NULL, $_email=NULL){
			$this->id_cliente = $_id_cliente;
			$this->nombre= $_nombre;
			$this->apellido= $_apellido;
			$this->direccion = $_direccion;
			$this->dui= $_dui;
			$this->tel = $_tel;
			$this->email = $_email;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO clientes VALUES (:id_cliente, :nombre, :apellido, :direccion, :tel, :dui, :email)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			":id_cliente"			=> $this->id_cliente,
			":nombre"                       => $this->nombre,
			":apellido"			=> $this->apellido,
			":direccion"			=> $this->direccion,
			":dui"                          => $this->dui,
			":tel"                          => $this->tel,
			":email"			=> $this->email
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM clientes WHERE id_cliente=:id_cliente";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "clientes");
	$sth->execute(array(":id_cliente"=> $this->id_cliente));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE clientes "
			."SET nombre=:nombre, "
			."apellido=:apellido, "
			."direccion=:direccion, " 
			."dui=:dui, "
			."tel=:tel, "
			."email=:email "
			."WHERE id_cliente=:id_cliente";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "clientes");
	$sth->execute(array(
			"nombre"                       => $this->nombre,
			"apellido"			=> $this->apellido,
			"direccion"			=> $this->direccion,
			"dui"                          => $this->dui,
			"tel"                          => $this->tel,
			"email"                     => $this->email,
			"id_cliente"			=> $this->id_cliente
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM clientes";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "clientes");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM clientes WHERE id_cliente=:id_cliente";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "clientes");
		$sth->execute(array("id_cliente" => $this->id_cliente));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}

