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
		
		
	if($_POST):
		$emp = new Empleados(
			$_POST['id_empleado'], 
			$_POST['nombre'], 
			$_POST['apellido'],  
			$_POST['direccion'], 
			$_POST['dui'], 
			$_POST['f_nacimiento'],
			$_POST['f_inicio'], 
			$_POST['telefono'],  
			$_POST['puesto'], 
			$_POST['salario']
		);
		$emp->update();
	endif;
	
	if ($_GET):
		$emp = new Empleados($_GET['id']);
		$rows = $emp->GetById();
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
            <h1>Modificar Cliente</h1>
        </header>
		
        <section>
            <form method="post" >
                Codigo Empleado<br>
                <INPUT TYPE="TEXT" NAME="id_emp" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_empleado" value='<?=$_GET['id']?>'/><br>
                Nombre Empleado<br>
                <INPUT TYPE="TEXT" NAME="nombre" value='<?=$rows[0]->nombre?>'><br>
                Apellido Empleado<br>
                <INPUT TYPE="TEXT" NAME="apellido" value='<?=$rows[0]->apellido?>'><br>
                Direccion Empleado<br>
                <INPUT TYPE="TEXT" NAME="direccion" value='<?=$rows[0]->direccion?>'><br>
               Dui Empleado<br>
                <INPUT TYPE="TEXT" NAME="dui" value='<?=$rows[0]->dui?>'><br>
                Fecha de Nacimiento Empleado<br>
                <INPUT TYPE="TEXT" NAME="f_nacimiento" value='<?=$rows[0]->f_nacimiento?>'><br>
                Fecha de Inicio de Empleado<br>
                <INPUT TYPE="TEXT" NAME="f_inicio" value='<?=$rows[0]->f_inicio?>'><br>
                Telefono Empleado<br>
                <INPUT TYPE="TEXT" NAME="telefono" value='<?=$rows[0]->telefono;?>'><br>
               Puesto Empleado<br>
                <INPUT TYPE="TEXT" NAME="puesto" value='<?=$rows[0]->puesto?>'><br>
                Salario Empleado<br>
                <INPUT TYPE="TEXT" NAME="salario" value='<?=$rows[0]->salario?>'><br>
                
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='empleados.php'>Regresar</a>";
?>
        </section>
    </body>
</html>