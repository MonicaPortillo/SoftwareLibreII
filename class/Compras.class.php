<?php


class Compras {
    public $id_compra;
    public $id_proveedor;
    public $id_perfume;
    public $cantidad;
    public $fecha;
    public $total;
	public $saldo;
    
    public function __construct($_id_compra=NULL, $_id_proveedor=NULL, $_id_perfume=NULL, $_cantidad=NULL, $_fecha=NULL, $_total=NULL){
			$this->id_compra = $_id_compra;
                        $this->id_proveedor = $_id_proveedor;
                        $this->id_perfume = $_id_perfume;
			$this->cantidad= $_cantidad;
			$this->fecha= $_fecha;
			$this->total = $_total;
			$this->saldo = $_total;
		}
                public function add(){
                    $pdo = new Connection();
                    $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql= "INSERT INTO compras VALUES (:id_compra, :id_proveedor, :id_perfume, :cantidad, :fecha, :total)";
                    $sth= $pdo->db->prepare($sql);
                    $sth->execute(array(
			"id_compra"			=> $this->id_compra,
			":id_proveedor"                 => $this->id_proveedor,
			":id_perfume"			=> $this->id_perfume,
			"cantidad"			=> $this->cantidad,
			":fecha"                        => $this->fecha,
			":total"                        => $this->total,
			":saldo"                        => $this->saldo
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM compras WHERE id_compra=:id_compra";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "compras");
	$sth->execute(array(":id_compra"=> $this->id_compra));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE compras "
			."SET id_proveedor=:id_proveedor, "
			."id_perfume=:id_perfume, "
			."cantidad=:cantidad, "
			."fecha=:fecha, "
			."total=:total, "
			."saldo=:saldo "
			."WHERE id_compra=:id_compra";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "compras");
	$sth->execute(array(
			"id_proveedor"                       => $this->id_proveedor,
			"id_perfume"			=> $this->id_perfume,
			"cantidad"			=> $this->cantidad,
			"fecha"                          => $this->fecha,
			"total"                          => $this->total,
			"saldo"                          => $this->saldo,
			"id_compra"			=> $this->id_compra
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM compras";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "compras");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM compras WHERE id_compra=:id_compra";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "compras");
		$sth->execute(array("id_compra" => $this->id_compra));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}
}
