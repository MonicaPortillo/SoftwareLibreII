<?php
session_start();
include './class/Cookies.php';
include './class/Session.php';
$session = new Session();
$session->close();
if($session->checkAccess()):
    header("location: menu.php");
else:
    header("location: index.php?msg=4");
endif;
