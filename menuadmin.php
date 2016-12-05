<?php
session_start();
include './class/Session.php';
include './class/Usuarios.php';
include './class/Connection.class.php';
$ses = new Session($_SESSION["user"], $_SESSION["pass"]);
$ses->doValidation();
if(!$ses->isAdminstrator()):
    header("location: sessioncliente.php");
endif;?>
<!DOCTYPE html>
<html>
    <head>
      
        <title>Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/menu.css" media="screen"/>
       
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
       
    </head>
    <body>

        <header>
            
            <div id="subheader">
              
            </div>
	    <br><br><br>
            <div align="center">
            <a href="admin.php"><img src="imgs/Administrator.png" alt="Administrador" title="Administrador"></a>
            <a href="reportes.php"><img src="imgs/reports.ico" alt="Reportes" title="Reportes"></a></br>
            <br><br>
           <form action="salir.php" method="post">
         <input type="submit" value="Cerrar Session" /></div>
           
        </header>
        
		</form>
        </br>

</html>
