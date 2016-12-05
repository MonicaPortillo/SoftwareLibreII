<?php

class Ventas {
                public $id_venta;
                public $id_cliente;
                public $id_perfume;
		public $fecha;
		public $cantidad;
		public $total;
                
                public function __construct($_id_venta=NULL, $_id_cliente=NULL, $_id_perfume=NULL, $_fecha=NULL, $_cantidad=NULL,$_total=NULL){
			$this->id_venta = $_id_venta;
                        $this->id_cliente = $_id_cliente;
                        $this->id_perfume = $_id_perfume;
			$this->fecha= $_fecha;
			$this->cantidad= $_cantidad;
			$this->total = $_total;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO ventas VALUES (:id_venta,:id_cliente,:id_perfume, :fecha, :cantidad, :total)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_venta"			=> $this->id_venta,
			"id_cliente"			=> $this->id_cliente,
			"id_perfume"			=> $this->id_perfume,
			":fecha"                       => $this->fecha,
			":cantidad"			=> $this->cantidad,
			":total"			=> $this->total
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM ventas WHERE id_venta=:id_venta";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "ventas");
	$sth->execute(array(":id_venta"=> $this->id_venta));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE ventas "
			."SET id_cliente=:id_cliente, "
			."id_perfume=:id_perfume, "
			."fecha=:fecha, "
			."cantidad=:cantidad, "
			."total=:total "
			."WHERE id_venta=:id_venta";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "ventas");
	$sth->execute(array(
			"id_cliente"            => $this->id_cliente,
			"id_perfume"		=> $this->id_perfume,
			"fecha"			=> $this->fecha,
			"cantidad"              => $this->cantidad,
			"total"                 => $this->total,
			"id_venta"		=> $this->id_venta
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM ventas";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "ventas");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM ventas WHERE id_venta=:id_venta";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "ventas");
		$sth->execute(array("id_venta" => $this->id_venta));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}
