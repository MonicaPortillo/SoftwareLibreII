<?php
session_start();
$con = mysql_connect("localhost", "root", "")
                    or die(mysql_error());
            if($con):
                $sisp = mysql_select_db("Proyecto",$con);
                if($sisp):
                    $data = mysql_query("SELECT * FROM usuarios")
                        or die(mysql_error());
                    if(mysql_num_rows($data)):
                        
                    endif;
                     endif;
                      endif;
//Iniciar la sesion
if(!isset($_SESSION["usuario"])){
    $clave = $_POST["clave"];
    $sql = "SELECT * FROM usuarios WHERE
            nombre = '".$_POST["usuario"]."' AND
            pass = '".$clave."'
           ";
    echo $sql;
    $consulta = mysql_query($sql,$conectar);
    $fila = mysql_fetch_array($consulta);
    echo mysql_error();
    if(mysql_num_rows($consulta) > 0){
        $_SESSION["usuario"] = $fila["nombre"];
        echo '<script type="text/javascript">location.href="datos.php";</script>';
    }else{
        echo '<script type="text/javascript">alert("El nombre de usuario o  la clave son invalidas"); location.href="index.php";</script>';
    }
}?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Agenda</h1><hr/>
        </body>
        </html>