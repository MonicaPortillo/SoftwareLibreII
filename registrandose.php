<?php

session_start();
$arreglo;

include './class/Connection.class.php';
		include './class/Clientes.class.php';
	if ($_POST):
        $cli = new Clientes(
			$_POST['id_cliente'], 
			$_POST['nombre'], 
			$_POST['apellido'],  
			$_POST['direccion'], 
			$_POST['dui'], 
			$_POST['tel'], 
			$_POST['email']
                );
                
	
		$ideexist= $cli->GetById();
		
		if(!count($ideexist)) $result = $cli->add();
		if ($result):
		$_SESSION["id"] = $_POST['id_cliente'];
		$_SESSION["nombre"]	= $_POST['nombre'];
		$_SESSION["apellido"]	= $_POST['apellido'];
		$_SESSION["email"]	= $_POST['email'];
            header("location: registrandosee.php");?>

<?php

		else:
			echo "Id ya existe";
		endif;endif;
	
	?>
	<!doctype html>
<html>
    <head>
	<meta charset="utf-8"/>
        <title>Sistema de Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/carrito.css" media="screen"/>
       
    </head>
  
        <header> <div id="subheader">
                <font color="#FFFFFF">
                <h1>Datos</h1><br><br><br><br></font>
        </header>
    
	  
    <body>
            <nav>
                <ul class="nav">
                    <li><a href="sesioncliente.php" >Incio</a></li>
                    <li><a href="nosotros.php" >Nosotros</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="carritoproductos.php" >Compra</a></li>
                </ul>
          
        <br>
        <section><center>
            <br> <br> <br> <br> <br> <form method="post" action="registrandose.php" class="formulario">    
                 <fieldset><br>
                     <h1>Personal</h1><br>
                 <INPUT TYPE="TEXT" NAME="id_cliente" style="visibility:hidden"/><br>
                 Nombre: 
                 <INPUT TYPE="TEXT" NAME="nombre"/><br>
                 Apellido:
                 <INPUT TYPE="TEXT" NAME="apellido"/>
		</fieldset>
                 
                <fieldset><br>
                    <h1>Ubicacion</h1><br>
                 Direccion: 
                 <INPUT TYPE="TEXT" NAME="direccion"/><br>
                 Dui Cliente:
                 <INPUT TYPE="TEXT" NAME="dui"/>
                 </fieldset>
                 
                 <fieldset><br>
                     <h1>Contactos</h1><br>
                 Telefono:
                 <INPUT TYPE="TEXT" NAME="tel"/><br>
                 Email:
                 <INPUT TYPE="TEXT" NAME="email"/>
                 </fieldset>
                
                
                 
                <input type="submit" value="Guardar" class="aceptar"/>
			</form>
            
			<?php
		  "<br>";
	 ?>
        </section>
        </section>
    </body>
</html>