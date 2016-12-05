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
		include './class/Ventas.class.php';
	if ($_POST):
		$ven = new Ventas(
			$_POST['id_venta'], 
			$_POST['id_cliente'],
			$_POST['id_perfume'],
			$_POST['id_empleado'],
			$_POST['cantidad'], 
			$_POST['fecha'], 
			$_POST['id_promocion'],
			$_POST['total']
		);
	
		$ideexist= $ven->GetById();
		
		if(!count($ideexist)) $result = $ven->add();
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
            <h1>Nueva Venta</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Venta<br>
                 <INPUT TYPE="TEXT" NAME="id_venta"/><br>
                 Codigo Cliente<br>
                 <INPUT TYPE="TEXT" NAME="id_cliente"/><br>
                 Codigo Perfume<br>
                 <INPUT TYPE="TEXT" NAME="id_perfume"/><br>
				 Codigo empleado<br>
                 <INPUT TYPE="TEXT" NAME="id_empleado"/><br>
				 Cantidad<br>
                 <INPUT TYPE="TEXT" NAME="cantidad"/><br>
                 Fecha<br>
                 <INPUT TYPE="TEXT" NAME="fecha"/><br>
                Codigo promocion<br>
                 <INPUT TYPE="TEXT" NAME="id_promocion"/><br>
                 Total<br>
                 <INPUT TYPE="TEXT" NAME="total"/><br>
                 
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='ventas.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>