	<?php
	class Proveedores {
        public $id_proveedor;
		public $nombre;
		public $direccion;
		public $tel;
		public $email;
		public $saldo;
                
                public function __construct($_id_proveedor=NULL, $_nombre=NULL, $_direccion=NULL, $_tel=NULL, $_email=NULL){
			$this->id_proveedor = $_id_proveedor;
			$this->nombre= $_nombre;
			$this->direccion = $_direccion;
			$this->tel = $_tel;
			$this->email = $_email;
			$this->saldo = $_email;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO proveedores VALUES (:id_proveedor, :nombre, :direccion, :tel,  :email)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_proveedor"			=> $this->id_proveedor,
			":nombre"                       => $this->nombre,
			"direccion"			=> $this->direccion,
			":tel"                          => $this->tel,
			":email"			=> $this->email,
			":saldo"			=> $this->saldo
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM proveedores WHERE id_proveedor=:id_proveedor";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "proveedores");
	$sth->execute(array(":id_proveedor"=> $this->id_proveedor));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE proveedores "
			."SET nombre=:nombre, "
			."direccion=:direccion, "
			."tel=:tel, "
			."email=:email, "
			."saldo=:saldo "
			."WHERE id_proveedor=:id_proveedor";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "proveedores");
	$sth->execute(array(
			"nombre"                       => $this->nombre,
			"direccion"			=> $this->direccion,
			"tel"                          => $this->tel,
			"email"                     => $this->email,
			"saldo"                     => $this->saldo,
			"id_proveedor"			=> $this->id_proveedor
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM proveedores";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "proveedores");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM proveedores WHERE id_proveedor=:id_proveedor";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "proveedores");
		$sth->execute(array("id_proveedor" => $this->id_proveedor));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


			
	
}	