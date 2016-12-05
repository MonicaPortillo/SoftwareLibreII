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
		
		
	if($_POST):
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
		$pro->update();
	endif;
	
	if ($_GET):
		$pro = new Promociones($_GET['id']);
		$rows = $pro->GetById();
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
            <h1>Modificar Promocion</h1>
        </header>
		
        <section>
            <form method="post" >
                Codigo Promocion<br>
                <INPUT TYPE="TEXT" NAME="id_pro" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_promocion" value='<?=$_GET['id']?>'/><br>
               Codigo Perfume <br>
                <INPUT TYPE="TEXT" NAME="id_perfume" value='<?=$rows[0]->id_perfume?>'><br>
				nombre<br>
                <INPUT TYPE="TEXT" NAME="nombre" value='<?=$rows[0]->nombre?>'><br>
				
			   Detalle Promocion<br>
                <INPUT TYPE="TEXT" NAME="descripcion" value='<?=$rows[0]->descripcion?>'><br>
                
                Fecha Inicio Promocion <br>
                <INPUT TYPE="TEXT" NAME="f_inicio" value='<?=$rows[0]->f_inicio?>'><br>
                Fecha Final Promocion<br>
                <INPUT TYPE="TEXT" NAME="f_final" value='<?=$rows[0]->f_final?>'><br>
                 precio unitario<br>
                <INPUT TYPE="TEXT" NAME="precio_unitario" value='<?=$rows[0]->precio_unitario?>'><br>
				
				descuento<br>
                <INPUT TYPE="TEXT" NAME="descuento" value='<?=$rows[0]->descuento?>'><br>
				 total<br>
                <INPUT TYPE="TEXT" NAME="total" value='<?=$rows[0]->total?>'><br>
				
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='promociones.php'>Regresar</a>";
?>
        </section>
    </body>
</html>


