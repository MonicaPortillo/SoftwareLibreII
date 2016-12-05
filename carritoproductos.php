<?php
session_start();
include './co.php';
if (isset($_SESSION['carrito'])){
    if(isset($_GET['id_perfume'])){
        $arreglo=$_SESSION['carrito'];
        $encontro= false;
        $numero=0;
        for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]['Id']==$_GET['id_perfume']){
                $encontro= true;
                $numero =$i;
            }
        }
        if($encontro==true){
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['carrito']=$arreglo;
        }else{
        $nombre="";
        $marca="";
        $descripcion="";
        $ml="";
        $familia="";
        $precio_unitario=0;
        $imagen="";
        $re= mysql_query("select * from perfume where id_perfume=".$_GET['id_perfume']);
        while ($f=  mysql_fetch_array($re)){
            $nombre=$f['nombre'];
            $marca=$f['marca'];
            $descripcion=$f['descripcion'];
            $ml=$f['ml'];
            $familia=$f['familia'];
            $precio_unitario=$f['precio_unitario'];
            $imagen=$f['imagen'];
        }
        $datosNuevos= array('Id'=>$_GET['id_perfume'],
                          'Nombre'=>$nombre,
                          'Marca'=>$marca,
                          'Descripcion'=>$descripcion,
                          'Mililitros'=>$ml,
                          'Familia'=>$familia,
                          'Precio'=>$precio_unitario,
                          'Imagen'=>$imagen,
                          'Cantidad'=>1);
                      array_push($arreglo, $datosNuevos);
                      $_SESSION['carrito']=$arreglo;
        }
        
    
    } 
    
}  else {
    if(isset($_GET['id_perfume'])){
        $nombre="";
        $marca="";
        $descripcion="";
        $ml="";
        $familia="";
        $precio_unitario=0;
        $imagen="";
        $re= mysql_query("select * from perfume where id_perfume=".$_GET['id_perfume']);
        while ($f=  mysql_fetch_array($re)){
            $nombre=$f['nombre'];
            $marca=$f['marca'];
            $descripcion=$f['descripcion'];
            $ml=$f['ml'];
            $familia=$f['familia'];
            $precio_unitario=$f['precio_unitario'];
            $imagen=$f['imagen'];
        }
        $arreglo[]= array('Id'=>$_GET['id_perfume'],
                          'Nombre'=>$nombre,
                          'Marca'=>$marca,
                          'Descripcion'=>$descripcion,
                          'Mililitros'=>$ml,
                          'Familia'=>$familia,
                          'Precio'=>$precio_unitario,
                          'Imagen'=>$imagen,
                          'Cantidad'=>1);
 $_SESSION['carrito']=$arreglo;
}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
        
        <link rel="stylesheet" type="text/css" href="./css/producto.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        <script type="text/javascript"  href="./js/scripts.js"></script>
        
			   
</head>
<div align="center"></div>
  <header>
            
	  
            
            
        </header>
<div id="subheader">
                <font color="#C71585">
                <h1>Carrito de Compras </h1></font>
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
            </nav>    <br>    <br>    <br>    <br>    <br>    <br>
<body align="center">

	<?php
        $total= 0;
        if(isset($_SESSION['carrito'])){
            $datos= $_SESSION['carrito'];
            $total= 0;
            for($i=0;$i<count($datos);$i++){
                ?>
           <div class="producto">
                <center>
                    <img src="./productos/<?php echo $datos[$i]['Imagen'];?>"><br>
                    
                    <span class="aceptarr">Producto: <?php echo $datos[$i]['Nombre']; ?> <span><br>
                    <span class="aceptarr">Marca: <?php echo $datos[$i]['Marca'];?> </span><br>
                    <span class="aceptarr">Descripcion: <?php echo $datos[$i]['Descripcion'];?></span><br>
                    <span class="aceptarr">Mililitros: <?php echo $datos[$i]['Mililitros'];?></span><br>
                    <span class="aceptarr">Familia: <?php echo $datos[$i]['Familia'];?></span><br>
                    <span class="aceptarr">Precio : $<?php echo $datos[$i]['Precio'];?></span><br>
                    <span class="aceptarr">Cantidad :<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                        data-precio="<?php echo $datos[$i]['Precio'];?>"
                        data-id="<?php echo $datos[$i]['Id'];?>"
                        class="cantidad">
                               </span><br>
                               <span class="subtotal">Subtotal : $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
                               <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
                </center>
            </div>
            <?php 
            $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
            }
        }else{
            echo '<center><h2> El carrito de compras esta vacio</h2></center>';
        }
        ?><br><br><br><br><br><br><br><br><br>
            
</body>
<h1><?php echo '<center><h1 id="total"> Total: '.$total.'</h1></center>';
            if($total !=0){
                ?><a href="./registrarse.php" class="aceptar">Iniciar Pago</a></center><br><br><?php
                
            }
            ?>
            <center><a href="productos.php" class="aceptar">Ver Catalogo</a></center>
            </h1>
	</section>
</html>