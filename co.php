<?php

$server= "localhost";
$username="root";
$password="";
$db="boutique";
$con= mysql_connect($server, $username. $password) or die(" no se ha podido establecer la coneccion");
$sdb= mysql_select_db($db, $con) or die("la base de datos no existe");
?>


