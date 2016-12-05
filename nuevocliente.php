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
		include './class/Clientes.class.php';
	if ($_POST):
		$cli = new Clientes(
			$_POST['id_cliente'], 
			$_POST['nombre'], 
			$_POST['apellido'],  
			$_POST['direccion'], 
			$_POST['dui'], 
			$_POST['tel'], 
			$_POST['email']
		);
	
		$ideexist= $cli->GetById();
		
		if(!count($ideexist)) $result = $cli->add();
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
            <h1>Nuevo Cliente</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Cliente<br>
                 <INPUT TYPE="TEXT" NAME="id_cliente"/><br>
                 "Nombre Cliente"<br>
                 <INPUT TYPE="TEXT" NAME="nombre"/><br>
                 Apellido Cliente<br>
                 <INPUT TYPE="TEXT" NAME="apellido"/><br>
                 Direccion Cliente<br>
                 <INPUT TYPE="TEXT" NAME="direccion"/><br>
				 Dui Cliente<br>
                 <INPUT TYPE="TEXT" NAME="dui"/><br>
				
                 "Telefono Cliente"<br>
                 <INPUT TYPE="TEXT" NAME="tel"/><br>
                 Email<br>
                 <INPUT TYPE="TEXT" NAME="email"/><br>
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='clientes.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>