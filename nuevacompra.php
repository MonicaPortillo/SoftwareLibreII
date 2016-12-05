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
		include './class/Compras.class.php';
	if ($_POST):
		$com = new Compras(
			$_POST['id_compra'], 
			$_POST['id_proveedor'], 
			$_POST['id_perfume'],  
			$_POST['cantidad'], 
			$_POST['fecha'], 
			$_POST['total'],
			$_POST['saldo']
		);
	
		$ideexist= $com->GetById();
		
		if(!count($ideexist)) $result = $com->add();
		if ($result):
			echo "Dato Guardado";
		else:
			echo "Id ya existe";
		endif;
	endif;
	?>
	<!doctype html>
<html>
    <head>
	<meta charset="utf-8">
        <title>Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Nueva Compra</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Compra<br>
                 <INPUT TYPE="TEXT" NAME="id_compra"/><br>
                 Codigo Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="id_proveedor"/><br>
                 Codigo  Perfume<br>
                 <INPUT TYPE="TEXT" NAME="id_perfume"/><br>
                 Cantidad<br>
                 <INPUT TYPE="TEXT" NAME="cantidad"/><br>
                 Fecha<br>
                 <INPUT TYPE="TEXT" NAME="fecha"/><br>
                 Total<br>
                 <INPUT TYPE="TEXT" NAME="total"/><br>
                 saldo<br>
                 <INPUT TYPE="TEXT" NAME="saldo"/><br>
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='compras.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>