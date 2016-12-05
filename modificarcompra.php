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
		
		
	if($_POST):
		$com = new Compras(
			$_POST['id_compra'], 
			$_POST['id_proveedor'], 
			$_POST['id_perfume'],  
			$_POST['cantidad'], 
			$_POST['fecha'], 
			$_POST['total']
		);
		$com->update();
	endif;
	
	if ($_GET):
		$com = new Compras($_GET['id']);
		$rows = $com->GetById();
	endif;
	
	
	
	?>
			$_POST['id_compra'], 
			$_POST['id_proveedor'], 
			$_POST['id_perfume'],  
			$_POST['cantidad'], 
			$_POST['fecha'], 
			$_POST['total']
		<!doctype html>
<html>
    <head>
	<meta charset="utf-8">
        <title>Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modificar Compras</h1>
        </header>
		
        <section>
            <form method="post" >
                Codigo Compra<br>
                <INPUT TYPE="TEXT" NAME="id_com" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_compra" value='<?=$_GET['id']?>'/><br>
                Codigo Proveedor<br>
                <INPUT TYPE="TEXT" NAME="id_proveedor" value='<?=$rows[0]->id_proveedor?>'><br>
                Codigo Perfume<br>
                <INPUT TYPE="TEXT" NAME="id_perfume" value='<?=$rows[0]->id_perfume?>'><br>
                Cantidad<br>
                <INPUT TYPE="TEXT" NAME="cantidad" value='<?=$rows[0]->cantidad?>'><br>
                Fecha<br>
                <INPUT TYPE="TEXT" NAME="fecha" value='<?=$rows[0]->fecha?>'><br>
                 Total<br>
                <INPUT TYPE="TEXT" NAME="total" value='<?=$rows[0]->total?>'><br>
                
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='compras.php'>Regresar</a>";
?>
        </section>
    </body>
</html>

