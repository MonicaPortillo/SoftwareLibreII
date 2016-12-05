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
		include './class/Proveedores.class.php';
	if ($_POST):
		$prov = new Proveedores(
			$_POST['id_cliente'], 
			$_POST['nombre'],   
			$_POST['direccion'], 
			$_POST['tel'], 
			$_POST['email'],
			$_POST['saldo']
		);
	
		$ideexist= $prov->GetById();
		
		if(!count($ideexist)) $result = $prov->add();
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
            <h1>Nuevo Proveedor</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="id_cliente"/><br>
                 Nombre Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="nombre"/><br>
                 Direccion Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="direccion"/><br>
                 Telefono Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="tel"/><br>
                 Dui Cliente<br>
                 <INPUT TYPE="TEXT" NAME="dui"/><br>
                 Email Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="email"/><br>
				 saldo Proveedor<br>
                 <INPUT TYPE="TEXT" NAME="saldo"/><br>
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='proveedor.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>