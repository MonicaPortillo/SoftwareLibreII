<?php

class Perfumes {
        public $id_perfume;
		public $nombre;
		public $marca;
		public $descripcion;
		public $ml;
		public $familia;
		public $cantidad_existente;
		public $precio_unitario;
        public $precio_mayoreo;
        public $precio_compra;
        public $imagen;
                
                public function __construct($_id_perfume=NULL, $_nombre=NULL, $_marca=NULL, $_descripcion=NULL, $_ml=NULL, $_familia=NULL, $_cantidad_existente=NULL, $_precio_unitario=NULL,$_precio_mayoreo=NULL,$_precio_compra=NULL,$_imagen=NULL){
			$this->id_perfume = $_id_perfume;
			$this->nombre= $_nombre;
			$this->marca= $_marca;
			$this->descripcion = $_descripcion;
			$this->ml = $_ml;
            $this->familia = $_familia;
            $this->cantidad_existente= $_cantidad_existente;
			$this->precio_unitario= $_precio_unitario;
            $this->precio_mayoreo= $_precio_mayoreo;
            $this->precio_compra= $_precio_compra;
            $this->imagen= $_imagen;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO perfume VALUES (:id_perfume, :nombre, :marca, :descripcion, :ml,  :familia, :cantidad_existente, :precio_unitario,:precio_mayoreo,:precio_compra, :imagen)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_perfume"                    => $this->id_perfume,
			":nombre"                       => $this->nombre,
			":marca"			=> $this->marca,
			":descripcion"                  => $this->descripcion,
			":ml"                    	=> $this->ml,
			":familia"                    	=> $this->familia,
			":cantidad_existente"            => $this->cantidad_existente,
			":precio_unitario"              => $this->precio_unitario,
			":precio_mayoreo"               => $this->precio_mayoreo,
			":precio_compra"                => $this->precio_compra,
            ":imagen" => $this->imagen
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM perfume WHERE id_perfume=:id_perfume";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "perfume");
	$sth->execute(array(":id_perfume"=> $this->id_perfume));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE perfume "
			."SET nombre=:nombre, "
			."marca=:marca, "
			."descripcion=:descripcion, "
			."ml=:ml, "
			."familia=:familia, "
			."cantidad_existente=:cantidad_existente, "
			."precio_unitario=:precio_unitario, "
            ."precio_mayoreo=:precio_mayoreo, "
            ."precio_compra=:precio_compra "
			."WHERE id_perfume=:id_perfume";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "prefumes");
	$sth->execute(array(
			"nombre"                => $this->nombre,
			"marca"                 => $this->marca,
			"descripcion"           => $this->descripcion,
			"ml"		=> $this->ml,
			"familia"		=> $this->familia,
			"cantidad_existente"		=> $this->cantidad_existente,
			"precio_unitario"                => $this->precio_unitario,
            "precio_mayoreo"                => $this->precio_mayoreo,
            "precio_compra"                => $this->precio_compra,
			"id_perfume"                    => $this->id_perfume
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM perfume";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "perfume");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM perfume WHERE id_perfume=:id_perfume";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "perfume");
		$sth->execute(array("id_perfume" => $this->id_perfume));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}
