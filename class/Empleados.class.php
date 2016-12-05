<?php
class Empleados {
                public $id_empleado;
		public $nombre;
		public $apellido;
		public $direccion;
		public $dui;
		public $f_nacimiento;
		public $telefono;
		public $f_inicio;
		public $puesto;
		public $salario;
                
                public function __construct($_id_empleado=NULL, $_nombre=NULL, $_apellido=NULL, $_direccion=NULL, $_dui=NULL, $_f_nacimiento=NULL, $_f_inicio=NULL, $_telefono=NULL, $_puesto=NULL, $_salario=NULL){
			$this->id_empleado = $_id_empleado;
			$this->nombre= $_nombre;
			$this->apellido= $_apellido;
			$this->direccion = $_direccion;
			$this->dui= $_dui;
                        $this->f_nacimiento= $_f_nacimiento;
						$this->telefono= $_telefono;
                        $this->f_inicio= $_f_inicio;
                        $this->puesto= $_puesto;
                        $this->salario= $_salario;
		}
		
		
	public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO empleados VALUES (:id_empleado, :nombre, :apellido, :direccion, :dui, :f_nacimiento, :f_inicio, :telefono, :puesto, :salario)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			"id_empleado"			=> $this->id_empleado,
			":nombre"                       => $this->nombre,
			":apellido"			=> $this->apellido,
			"direccion"			=> $this->direccion,
			":dui"                          => $this->dui,
			":f_nacimiento"			=> $this->f_nacimiento,
			":telefono"			=> $this->telefono,
			":f_inicio"			=> $this->f_inicio,
			":puesto"                          => $this->puesto,
			":salario"			=> $this->salario
		)
	);
	return $sth->rowCount();

	}

	public function delete(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "DELETE FROM empleados WHERE id_empleado=:id_empleado";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "empleados");
	$sth->execute(array(":id_empleado"=> $this->id_empleado));
	return $sth->rowCount();
	}
	
	
	
	public function update(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql  = "UPDATE empleados "
			."SET nombre=:nombre, "
			."apellido=:apellido, "
			."direccion=:direccion, "
			."dui=:dui, "
			."f_nacimiento=:f_nacimiento, "
			."telefono=:telefono, "
            ."f_inicio=:f_inicio, "
			."puesto=:puesto, "
			."salario=:salario "
			."WHERE id_empleado=:id_empleado";
	$sth= $pdo->db->prepare($sql);
	$sth->setFetchMode(PDO::FETCH_CLASS, "empleados");
	$sth->execute(array(
			"nombre"                        => $this->nombre,
			"apellido"			=> $this->apellido,
			"direccion"			=> $this->direccion,
			"dui"                           => $this->dui,
			"f_nacimiento"                  => $this->f_nacimiento,
			"telefono"			=> $this->telefono,
            "f_inicio"			=> $this->f_inicio,
			"puesto"                        => $this->puesto,
			"salario"                       => $this->salario,
			"id_empleado"			=> $this->id_empleado
		)
	);
	return $sth->rowCount();
}
        public function getAll(){
	$pdo = new Connection();
            $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql= "SELECT * FROM empleados";
            $sth= $pdo->db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, "empleados");
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_CLASS);
            return $rows;
	}
        	public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM empleados WHERE id_empleado=:id_empleado";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "empleados");
		$sth->execute(array("id_empleado" => $this->id_empleado));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}


}
