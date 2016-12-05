<?php
session_start();
include("./class/coneccion.php"); 
$extra = mysql_query("select nombres_user, nivel from usuarios where username='$_SESSION[username]'");

while ($datos = mysql_fetch_array($extra))
{
 @$usuario .= $datos[0];
 @$ni .= $datos[1];
}
@$user .= "$usuario";
@$nivel .= "$ni";

if($nivel == 0)
{
header("location: admin.php?n=$user");
}
else 
{
    if($nivel == 1)
       {
        header("location: sesioncliente.php?n=$user");
        
       }
       else{
           
        header("location: principal3.php?n=$user");
       }
}
?>