<?php
session_start();
include './class/Session.php';
include './class/Usuarios.php';
include './class/Connection.class.php';
$ses = new Session($_SESSION["user"], $_SESSION["pass"]);
$ses->doValidation();
if(!$ses->isAdminstrator()):
    header("location: index.php");
endif;
echo "<h1>Bienvenido Administrador ".$_SESSION['user']."</h1>";