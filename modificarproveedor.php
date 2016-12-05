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
		
		
	if($_POST):
		$prov = new Proveedores(
			$_POST['id_proveedor'], 
			$_POST['nombre'],   
			$_POST['direccion'], 
			$_POST['tel'], 
			$_POST['email']
			$_POST['saldo']
		);
		$prov->update();
	endif;
	
	if ($_GET):
		$prov = new Proveedores($_GET['id']);
		$rows = $prov->GetById();
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
            <h1>Modificar Proveedor</h1>
        </header>
		
        <section>
            <form method="post" >
                Codigo Proveedor<br>
                <INPUT TYPE="TEXT" NAME="id_prov" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_proveedor" value='<?=$_GET['id']?>'/><br>
                Nombre Proveedor<br>
                <INPUT TYPE="TEXT" NAME="nombre" value='<?=$rows[0]->nombre?>'><br>
                Direccion Proveedor<br>
                <INPUT TYPE="TEXT" NAME="direccion" value='<?=$rows[0]->direccion?>'><br>
                Telefono Proveedor<br>
                <INPUT TYPE="TEXT" NAME="tel" value='<?=$rows[0]->tel?>'><br>
                 Email Proveedor<br>
                <INPUT TYPE="TEXT" NAME="email" value='<?=$rows[0]->email?>'><br>
                 saldo<br>
                <INPUT TYPE="TEXT" NAME="saldo" value='<?=$rows[0]->saldo?>'><br>
                
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='proveedor.php'>Regresar</a>";
?>
        </section>
    </body>
</html>


