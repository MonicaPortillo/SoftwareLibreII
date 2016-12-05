<?php
class Usuarios {
    public $alias;
    public $pass;
    public $type;


    public function __construct(
            $_alias=NULL, 
            $_pass=NULL, 
            $_type=NULL){
        $this->alias = $_alias;
        $this->pass = $_pass;
        $this->type = $_type;
    }
    
    public function isValid(){
       $pdo = new Connection();
       $sql = "SELECT * FROM usuarios WHERE alias=:alias AND pass=:pass";
       $pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sth = $pdo->db->prepare($sql);
       $sth->setFetchMode(PDO::FETCH_CLASS, "usuarios");
       $sth->execute(array("alias"=>  $this->alias, "pass"=>  $this->pass));
       $rows = $sth->fetchAll(PDO::FETCH_CLASS);
       return $rows;
    }
    public function add(){
	$pdo = new Connection();
	$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "INSERT INTO usuarios VALUES (:alias, :pass, :type)";
	$sth= $pdo->db->prepare($sql);
	$sth->execute(array(
			":alias"                    => $this->alias,
			":pass"                       => $this->pass,
			":type"                       => $this->type
		)
	);
	return $sth->rowCount();

	}
    public function getByid(){
		$pdo= new Connection();
		$pdo->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 	"SELECT * FROM usuarios WHERE alias=:alias";
		$sth=$pdo->db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_CLASS, "usuarios");
		$sth->execute(array("alias" => $this->alias));
		$rows = $sth->fetchAll(PDO::FETCH_CLASS);
		return $rows;
	}
}