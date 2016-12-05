<?php
session_start();
include './class/Cookies.php';
include './class/Session.php';
$session = new Session();
$session->close();
session_destroy($arreglo);
if($session->checkAccess()):
    header("location: sesioncliente.php");
else:
    header("location: sesioncliente.php");
endif;
