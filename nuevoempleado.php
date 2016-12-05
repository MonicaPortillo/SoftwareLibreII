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
		include './class/Empleados.class.php';
	if ($_POST):
		$emp = new Empleados(
			$_POST['id_empleado'], 
			$_POST['nombre'], 
			$_POST['apellido'],  
			$_POST['direccion'], 
			$_POST['dui'], 
			$_POST['f_nacimiento'],
			$_POST['telefono'],
            $_POST['f_inicio'], 
			$_POST['puesto'], 
			$_POST['salario']
		);
	
		$ideexist= $emp->GetById();
		
		if(!count($ideexist)) $result = $emp->add();
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
            <h1>Nuevo Empleado</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Empleado<br>
                 <INPUT TYPE="TEXT" NAME="id_empleado"/><br>
                 "Nombre Empleado"<br>
                 <INPUT TYPE="TEXT" NAME="nombre"/><br>
                 Apellido Empleado<br>
                 <INPUT TYPE="TEXT" NAME="apellido"/><br>
                 Direccion Empleado<br>
                 <INPUT TYPE="TEXT" NAME="direccion"/><br>
                 Dui Empleado<br>
                 <INPUT TYPE="TEXT" NAME="dui"/><br>
                 Fecha de Nacimiento Empleado<br>
                 <INPUT TYPE="TEXT" NAME="f_nacimiento"/><br>
				 Telefono Empleado<br>
                 <INPUT TYPE="TEXT" NAME="telefono"/><br>
                 Fevha de Inicio Empleado<br>
                 <INPUT TYPE="TEXT" NAME="f_inicio"/><br>
                 Puesto Empleado<br>
                 <INPUT TYPE="TEXT" NAME="puesto"/><br>
                 Salario Empleado<br>
                 <INPUT TYPE="TEXT" NAME="salario"/><br>
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='empleados.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>