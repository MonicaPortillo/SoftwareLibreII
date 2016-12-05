<?php
session_start();
$passcambio = 0;
if($_GET):
    $passcambio = $_GET['msg'];
endif;  
if(!$passcambio == 3):
    include './class/Cookies.php';
    include './class/Session.php';
    $cookie = new Cookies();
    //var_dump($cookie);
    if($cookie->offsetExists("user")):
        $data = $cookie->offsetGet("user");
        $vars = explode(":", $data);
        $user = $vars[0];
        $pass = $vars[1];
        $session = new Session($user, $pass, FALSE);
        if($session->doValidation()):
            header("location: menuadmin.php");
        else:
            header("location: index.php?msg=3");
        endif;
    endif;
endif;

?>

<!DOCTYPE html>
<html>
    <head >
        <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/index.css" media="screen"/>
        <title></title>
    </head>
    <body><a style="border:0" href="http://www.textoconbrillo.net/" target="_blank" title="Texto con brillo"><marquee width="100%" behavior="scroll" direction="left" scrollamount="9"><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='n' src='http://www.textoconbrillo.net/texto/brillo26/n.gif'><img border='0' alt='t' src='http://www.textoconbrillo.net/texto/brillo26/t.gif'><img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo26/r.gif'><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='y' src='http://www.textoconbrillo.net/texto/brillo26/y.gif'><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='n' src='http://www.textoconbrillo.net/texto/brillo26/n.gif'><img border='0' alt='u' src='http://www.textoconbrillo.net/texto/brillo26/u.gif'><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='s' src='http://www.textoconbrillo.net/texto/brillo26/s.gif'><img border='0' alt='t' src='http://www.textoconbrillo.net/texto/brillo26/t.gif'><img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo26/r.gif'><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='g' src='http://www.textoconbrillo.net/texto/brillo26/g.gif'><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='l' src='http://www.textoconbrillo.net/texto/brillo26/l.gif'><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo26/r.gif'><img border='0' alt='i' src='http://www.textoconbrillo.net/texto/brillo26/i.gif'><img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo26/a.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='d' src='http://www.textoconbrillo.net/texto/brillo26/d.gif'><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1><img border='0' alt='p' src='http://www.textoconbrillo.net/texto/brillo26/p.gif'><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo26/r.gif'><img border='0' alt='f' src='http://www.textoconbrillo.net/texto/brillo26/f.gif'><img border='0' alt='u' src='http://www.textoconbrillo.net/texto/brillo26/u.gif'><img border='0' alt='m' src='http://www.textoconbrillo.net/texto/brillo26/m.gif'><img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo26/e.gif'><img border='0' alt='s' src='http://www.textoconbrillo.net/texto/brillo26/s.gif'></marquee></a>
	
	
<center>
	<img align="center" src="http://www.xmg.com/wp-content/uploads/2013/05/FSB_iPhoneLifeAward_WebAnnouncement_Banner.png" alt="imagen" width="600" />

	</center>
 
        <form action="loggin.php" method="post">
            <br><div align="center">
                <div  >Usuario</div>
                <input  type="text" name="user" />
            </div>
            <div align="center">
                <div >Password</div>
                <input align="center" type="password" name="pass" />
            </div>
            
            <div align="center">
                <input  type="submit" name="Iniciar Session" />
            </div>
        </form>
    </body>
</html>