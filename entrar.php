<?php
session_start();
$_SESSION['carrito']=$arreglo;
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
    </head>
</html><?php
		include './class/Connection.class.php';
		include './class/Usuarios.php';
	if ($_POST):
		$usu = new Usuarios(
			$_POST['user'], 
			(sha1($_POST['pass'])), 
			$_POST['type'] 
		);
	
		$ideexist= $usu->GetById();
		
		if(!count($ideexist)) $result = $usu->add();
		if ($result):
            header("location: REPORTEventa.php");
		else:
			echo "Usuario ya existe ya existe";
		endif;
	endif;
	?>
