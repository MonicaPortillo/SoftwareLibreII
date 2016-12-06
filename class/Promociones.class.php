<?php
class Promociones {
                public $id_promocion;
		public $id_perfume;
		public $nombre;
		public $descripcion;
		public $f_inicio;
		public $f_final;
        public $precio_unitario;
		public $descuento;
        public $total;
		
		
                public function __construct($_id_promocion=NULL,$_id_perfume=NULL,$_nombre=NULL, $_descripcion=NULL, $_f_inicio=NULL, $_f_final=NULL, $_precio_unitario=NULL, $_descuento=NULL,  $_total=NULL){
			$this->id_promocion = $_id_promocion;
			$this->id_perfume= $_id_perfume;
			$this->nombre= $_nombre;
			$this->descripcion= $_descripcion;
			$this->f_inicio = $_f_inicio;
			$this->f_final = $_f_final;
			$this->precio_unitario= $_precio_unitario;
			$this->descuento= $_descuento;
			$this->total= $_total;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO promociones VALUES (:id_promocion, :detalle, :id_perfume, :f_inicio, :f_final)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_promocion"			=> $this->id_promocion,
			":id_perfume"			=> $this->id_perfume,
			":nombre"				=> $this->nombre,
			":descripcion"          => $this->descripcion,
			":f_inicio"				=> $this->f_inicio,
			":f_final"              => $this->f_final,
			":precio_unitario"		=> $this->precio_unitario,
			":descuento"			=> $this->descuento,
			":total"	     		=> $this->total,
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM promociones WHERE id_promocion=:id_promocion";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "promociones");
	$sth->execute(array(":id_promocion"=> $this->id_promocion));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE promociones "
			."SET id_perfume=:id_perfume, "
			."nombre=:nombre, "
			."detalle=:detalle, "
			."f_inicio=:f_inicio, "
			."f_final=:f_final "
			."precio_unitario=:precio_unitario, "
			."descuento=:descuento, "
			."total=:total, "
			."WHERE id_promocion=:id_promocion";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "promociones");
	$sth->execute(array(
			"id_perfume"			=> $this->id_perfume,
			"nombre"                       => $this->nombre,
			"descripcion"                       => $this->descripcion,
			"f_inicio"			=> $this->f_inicio,
			"f_final"                          => $this->f_final,
			"precio_unitario"                       => $this->precio_unitario,
			"descuento"                       => $this->descuento,
			"total"                       => $this->total,
			"id_promocion"			=> $this->id_promocion
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM promociones";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "promociones");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM promociones WHERE id_promocion=:id_promocion";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "promociones");
		$sth->execute(array("id_promocion" => $this->id_promocion));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}
