	<?php
	class Connection{
		public $db;
		
		public function __construct() {
			$this->db = new PDO(
				'mysql:host=localhost;dbname=boutique; charset=utf8',
				'root',
				''
			);
		}
	}
	/*$con = new connection();
	var_dump($con); */