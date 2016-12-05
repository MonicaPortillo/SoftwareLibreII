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
		include './class/Clientes.class.php';
?>
<!doctype html>
<html>
    <head>
        <title>Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Clientes</h1>
        </header>
        <section>
<?php
if($_GET):
	$cli= new Clientes($_GET['id']);
	$res= $cli->delete();
	if($res):
		echo  "El dato fue eliminado"."<br>";
	else:
		echo "Error al eliminar el registro"."<br>";
	endif;
   "<br>";
                echo "<a href='clientes.php'>Regresar</a>";
            endif;
?>
        </section>
    </body>
</html>

