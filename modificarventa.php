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
		
		
	if($_POST):
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
		$ven->update();
	endif;
	
	if ($_GET):
		$ven = new Ventas($_GET['id']);
		$rows = $ven->GetById();
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
            <h1>Modificar Venta</h1>
        </header>
		
        <section>
            <form method="post" >
                Codigo Venta<br>
                <INPUT TYPE="TEXT" NAME="id_ven" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_venta" value='<?=$_GET['id']?>'/><br>
                Codigo Cliente<br>
                <INPUT TYPE="TEXT" NAME="id_cliente" value='<?=$rows[0]->id_cliente?>'><br>
                Codigo Perfume<br>
                <INPUT TYPE="TEXT" NAME="id_perfume" value='<?=$rows[0]->id_perfume?>'><br>
				Codigo Empleado<br>
                <INPUT TYPE="TEXT" NAME="id_empleado" value='<?=$rows[0]->id_empleado?>'><br>
				 Cantidad venta<br>
                <INPUT TYPE="TEXT" NAME="cantidad" value='<?=$rows[0]->cantidad?>'><br>
				
                Fecha Venta<br>
                <INPUT TYPE="TEXT" NAME="fecha" value='<?=$rows[0]->fecha?>'><br>
                Codigo Promocion<br>
                <INPUT TYPE="TEXT" NAME="id_promocion" value='<?=$rows[0]->id_promocion?>'><br>
                 Total Venta<br>
                <INPUT TYPE="TEXT" NAME="total" value='<?=$rows[0]->total?>'><br>
               
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='ventas.php'>Regresar</a>";
?>
        </section>
    </body>
</html>