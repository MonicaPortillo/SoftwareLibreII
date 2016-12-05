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
		include './class/Promociones.class.php';
	if ($_POST):
		$pro = new Promociones(
			$_POST['id_promocion'], 
			$_POST['id_perfume'],
			$_POST['nombre'],
			$_POST['descripcion'],
			$_POST['f_inicio'], 
			$_POST['f_final'],
			$_POST['precio_unitario'],
			$_POST['descuento'],
			$_POST['total']
		);
	
		$ideexist= $pro->GetById();
		
		if(!count($ideexist)) $result = $pro->add();
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
            <h1>Nuevo Promociones</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
            <form method="post" >
                 Codigo Promocion<br>
                 <INPUT TYPE="TEXT" NAME="id_promocion"/><br>
				 Codigo Perfume<br>
                 <INPUT TYPE="TEXT" NAME="id_perfume"/><br>
				 nombre<br>
                 <INPUT TYPE="TEXT" NAME="nombre"/><br>
                 Detalle Promocion<br>
                 <INPUT TYPE="TEXT" NAME="descripcion"/><br>
                 
                 Fecha Inicio de la Promocion<br>
                 <INPUT TYPE="TEXT" NAME="f_inicio"/><br>
                 Fecha Final de la Promocion<br>
                 <INPUT TYPE="TEXT" NAME="f_final"/><br>
				 precio unitario<br>
                 <INPUT TYPE="TEXT" NAME="precio_unitario"/><br>
				 descuento<br>
                 <INPUT TYPE="TEXT" NAME="descuento"/><br>
				 total<br>
                 <INPUT TYPE="TEXT" NAME="total"/><br>
				 
                 <input type="reset" value="Limpiar"/>
                 <input type="submit" value="Guardar"/>
			</form>				 
			<?php
		  "<br>";
     echo "<a href='promociones.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>