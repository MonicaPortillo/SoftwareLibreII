<!DOCTYPE html>
<html>
    <head>
       
        <title>Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
    </head>
</html>
       <?php
		include './class/Connection.class.php';
		include './class/Clientes.class.php';
		
		
	if($_POST):
		$cli = new Clientes(
			$_POST['id_cliente'], 
			$_POST['nombre'], 
			$_POST['apellido'],  
			$_POST['direccion'], 
			$_POST['tel'], 
			$_POST['dui'], 
			$_POST['email']
		);
		$cli->update();
	endif;
	
	if ($_GET):
		$cli = new Clientes($_GET['id']);
		$rows = $cli->GetById();
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
		
        <section >
            <form method="post" >
                Codigo Clienter<br>
                <INPUT TYPE="TEXT" NAME="id_cli" value='<?=$_GET['id']?>' disabled><br>
                <INPUT TYPE="hidden"  name="id_cliente" value='<?=$_GET['id']?>'/><br>
                Nombre Cliente<br>
                <INPUT TYPE="TEXT" NAME="nombre" value='<?=$rows[0]->nombre?>'><br>
                Apellido Cliente<br>
                <INPUT TYPE="TEXT" NAME="apellido" value='<?=$rows[0]->apellido?>'><br>
                Direccion Cliente<br>
                <INPUT TYPE="TEXT" NAME="direccion" value='<?=$rows[0]->Direccion?>'><br>
                Telefono Cliente<br>
                <INPUT TYPE="TEXT" NAME="tel" value='<?=$rows[0]->telefono?>'><br>
                 Dui Cliente<br>
                <INPUT TYPE="TEXT" NAME="dui" value='<?=$rows[0]->DUI?>'><br>
                Email Cliente<br>
                <INPUT TYPE="TEXT" NAME="email" value='<?=$rows[0]->email?>'><br>
                
                <input type="reset" value="Limpiar"/>
                <input type="submit" value="Actualizar"/>
            </form>				 
		
        </section>
		<?php
echo "<a href='clientes.php'>Regresar</a>";
?>
        </section>
    </body>
</html>