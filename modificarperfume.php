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
		include './class/Perfumes.class.php';
		
		
	if($_POST):
		$per = new Perfumes(
			$_POST['id'], 
			$_POST['nombre'], 
			$_POST['marca'],  
			$_POST['descripcion'],
			$_POST['ml'],  
			$_POST['familia'],  
			$_POST['cantidad_existente'],  
			$_POST['precio_unitario'],
                        $_POST['precio_mayoreo'],
                        $_POST['precio_compra']
                        
		);
		$per->update();
	endif;
	
	if ($_GET):
		$per = new Perfumes($_GET['id_perfume']);
		$rows = $per->GetById();
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
                Codigo Perfume<br>
                <INPUT TYPE="TEXT" NAME="id_per" value='<?=$_GET['id_perfume']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id" value='<?=$_GET['id_perfume']?>'/><br>
                Nombre Perfume<br>
                <INPUT TYPE="TEXT" NAME="nombre" value='<?=$rows[0]->nombre?>'><br>
                Marca Perfume<br>
                <INPUT TYPE="TEXT" NAME="marca" value='<?=$rows[0]->marca?>'><br>
                Descripcion Perfume<br>
                <INPUT TYPE="TEXT" NAME="descripcion" value='<?=$rows[0]->descripcion?>'><br>
                Ml Perfume<br>
                <INPUT TYPE="TEXT" NAME="ml" value='<?=$rows[0]->ml?>'><br>
                Familia Perfume<br>
                <INPUT TYPE="TEXT" NAME="familia" value='<?=$rows[0]->familia?>'><br>
                Cantidad Existente Perfume<br>
                <INPUT TYPE="TEXT" NAME="cantidad_existente" value='<?=$rows[0]->cantidad_existente?>'><br>
                 Precio Unitario Perfume<br>
                <INPUT TYPE="TEXT" NAME="precio_unitario" value='<?=$rows[0]->precio_unitario?>'><br>
                 Precio Mayoreo Perfume<br>
                <INPUT TYPE="TEXT" NAME="precio_mayoreo" value='<?=$rows[0]->precio_mayoreo?>'><br>
                 Precio Compra Perfume<br>
                <INPUT TYPE="TEXT" NAME="precio_compra" value='<?=$rows[0]->precio_compra?>'><br>
                
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='perfumes.php'>Regresar</a>";
?>
        </section>
    </body>
</html>