<?php
session_start();
$arreglo;
?>
<!doctype html>
<html>
    <head>
	<meta charset="utf-8"/>
        <title>Sistema de Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/registrandose.css" media="screen"/>
       
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
            <br> <br> <br> <br> <br><form method="post" action="REPORTEventa.php" class="formulario">
                 <fieldset><br>
                 Cuenta<br><br>
                 Usuario
                 <INPUT TYPE="TEXT" NAME="user"/><br>
                 Contraseña 
                 <INPUT type="password" NAME="pass"/><br>
                 <INPUT TYPE="TEXT" NAME="type" style="visibility:hidden" value="0"/> <br>
		</fieldset>
                 <input type="submit" value="Registrar" class="aceptar"/>
						
                </form>	 
			<?php
	 ?>
        </section>
        </section>
    </body>
</html>
