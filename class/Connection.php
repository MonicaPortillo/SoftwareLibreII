<?php
class Connection {
    public $db;
    
    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=SistemaProduccion", "root");
    }
}
