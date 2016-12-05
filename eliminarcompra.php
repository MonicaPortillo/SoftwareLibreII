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
?>
<!doctype html>
<html>
    <head>
        <title>Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
    </head>
    <body>
        <header>
            <h1>Modulo Compras</h1>
        </header>
        <section>
<?php
if($_GET):
	$com= new Compras($_GET['id']);
	$res= $com->delete();
	if($res):
		echo  "El dato fue eliminado"."<br>";
	else:
		echo "Error al eliminar el registro"."<br>";
	endif;
   "<br>";
                echo "<a href='compras.php'>Regresar</a>";
            endif;
?>
        </section>
    </body>
</html>

