<?php

class Ventas {
        public $id_ventaonline;
        public $numeroventa;
        public $id_perfume;
        public $id_cliente;
		public $cantidad;
		public $fecha;
		public $tarjeta;
		public $total;
                
                public function __construct($_id_ventaonline=NULL,$_numeroventa=NULL,  $_id_perfume=NULL, $_id_cliente=NULL, $_cantidad=NULL, $_fecha=NULL, $_tarjeta=NULL, $_total=NULL){
			$this->id_ventaonline  = $_id_ventaonline;
                        $this->numeroventa = $_numeroventa;
                        $this->id_perfume = $_id_perfume;
                        $this->id_cliente = $_id_cliente;
			$this->cantidad= $_cantidad;
			$this->fecha= $_fecha;
			$this->tarjeta= $_tarjeta;
			$this->total = $_total;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO ventasonline VALUES (:id_ventaonline, :numeroventa,:id_perfume, :id_cliente,  :cantidad , :fecha, :tarjeta, :total)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_ventaonline"                => $this->id_ventaonline,
			"id_perfume"			=> $this->id_perfume,
			"id_cliente"			=> $this->id_cliente,
			":cantidad"			=> $this->cantidad,
			":fecha"                        => $this->fecha,
			":tarjeta"			=> $this->tarjeta,
			":total"			=> $this->total
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM ventasonline WHERE id_ventaonline=:id_ventaonline";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "ventasonline");
	$sth->execute(array(":id_ventaonline"=> $this->id_ventaonline));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE ventasonline "
			."SET id_perfume=:id_perfume, "
			."id_cliente=:id_cliente, "
			."cantidad=:cantidad, "
			."fecha=:fecha, "
			."tarjeta=:tarjeta, "
			."total=:total "
			."WHERE id_ventaonline=:id_ventaonline";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "ventasoline");
	$sth->execute(array(
			"id_perfume"		=> $this->id_perfume,
			"id_cliente"            => $this->id_cliente,
			"cantidad"              => $this->cantidad,
			"fecha"			=> $this->fecha,
			"tarjeta"               => $this->tarjeta,
			"total"                 => $this->total,
			"id_ventaonline"	=> $this->id_ventaonline
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM ventasonline";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "ventasonline");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM ventas WHERE id_ventaonline=:id_ventaonline";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "ventasonline");
		$sth->execute(array("id_ventaonline" => $this->id_ventaonline));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}
