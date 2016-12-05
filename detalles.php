
<!DOCTYPE html>
<html lang="es">
    
	<meta charset="utf-8"/>
<head>
<a style="border:0" href="http://www.textoconbrillo.net/" target="_blank" title="Texto con brillo">
    <marquee width="100%" behavior="scroll" direction="left" scrollamount="9">
        <img border='0' alt='c' src='http://www.textoconbrillo.net/texto/brillo94/c.gif'>
        <img border='0' alt='o' src='http://www.textoconbrillo.net/texto/brillo94/o.gif'>
        <img border='0' alt='m' src='http://www.textoconbrillo.net/texto/brillo94/m.gif'>
        <img border='0' alt='p' src='http://www.textoconbrillo.net/texto/brillo94/p.gif'>
        <img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo94/r.gif'>
        <img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo94/e.gif'>
        <img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1>
        <img border='0' alt='l' src='http://www.textoconbrillo.net/texto/brillo94/l.gif'>
        <img border='0' alt='o' src='http://www.textoconbrillo.net/texto/brillo94/o.gif'>
        <img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1>
        <img border='0' alt='m' src='http://www.textoconbrillo.net/texto/brillo94/m.gif'>
        <img border='0' alt='e' src='http://www.textoconbrillo.net/texto/brillo94/e.gif'>
        <img border='0' alt='j' src='http://www.textoconbrillo.net/texto/brillo94/j.gif'>
        <img border='0' alt='o' src='http://www.textoconbrillo.net/texto/brillo94/o.gif'>
        <img border='0' alt='r' src='http://www.textoconbrillo.net/texto/brillo94/r.gif'>
        <img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1>
        <img border='0' alt='empty' src=http://www.textoconbrillo.net/images/empty.gif width=20 height=1>
        <img border='0' alt='a' src='http://www.textoconbrillo.net/texto/brillo94/a.gif'>
        <img border='0' alt='q' src='http://www.textoconbrillo.net/texto/brillo94/q.gif'>
        <img border='0' alt='u' src='http://www.textoconbrillo.net/texto/brillo94/u.gif'>
        <img border='0' alt='i' src='http://www.textoconbrillo.net/texto/brillo94/i.gif'>
    </marquee></a>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloss.css">
        
        <link rel="stylesheet" href="css/producto.css" media="screen"/>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
  <header>
            
            <div id="subheader">
                <font color="#C71585">
                <h1>Detalle</h1></font>
             
            
            </div>
	  
            
            <nav>
                <ul class="nav">
                    <li><a href="sesioncliente.php" >Incio</a></li>
                    <li><a href="nosotros.php" >Nosotros</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="reservacion.php">Reservacion</a></li>
                    <li><a href="carritoproductos.php" >Compra</a></li>
                </ul>
            </ul>
            </nav><br><br><br><br><br><br>
<body align="center">
    <br> 
	<?php
        include 'co.php';
        
		$re=mysql_query("select * from perfume where id_perfume=".$_GET['id_perfume'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>

<div class="producto" class="section">
			<center>
                <font color="#424242">
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span>Nombre : <?php echo $f['nombre'];?></span><br>
                                <span>Marca : <?php echo $f['marca'];?></span><br>
                                <span>Descripcion : <?php echo $f['descripcion'];?></span><br>
                                <span>Milimetros : <?php echo $f['ml'];?></span><br>
                                <span>Familia: <?php echo $f['familia'];?></span><br>
                                <span>Precio : $<?php echo $f['precio_unitario'];?></span><br><br><br>
                                <a href="./carritoproductos.php?id_perfume=<?php echo $f['id_perfume'];?>">Añadir A Carrito de Compras</a>
                                <br><a href="productos.php" >Atras</a>
                        </center>
</div>
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>

