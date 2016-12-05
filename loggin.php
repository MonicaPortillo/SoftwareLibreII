<?php
session_start();
include './class/Connection.class.php';
include './class/Cookies.php';
include './class/Session.php';
include "./class/Usuarios.php";
if($_POST):
    $recordar = (isset($_POST["recordar"]))? TRUE: FALSE;
    $session = new Session($_POST["user"], $_POST["pass"], $recordar);
    
	$ses = new Session($_SESSION["user"], $_SESSION["pass"]);

    if($session->doValidation()):
        if($ses->isAdminstrator()):
            header("location: menuadmin.php");
        else:
            header("location: sesioncliente.php");
        endif;
        endif;
    else:
        header("location: index.php?msg=1");
    
    
endif;