<?php
session_start();
if($_POST){
	$_SESSION["user"] = $_POST["user"];
	$_SESSION["tarjeta"] = $_POST["tarjeta"];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Reporte Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos_reporte.css">
        <script type="text/javascript"  src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>
        <script>
            $(document).ready(function(){
                $("#apagar").click(function(){
                    $("#fpagar").click();
                    return false;
                });
                
            });
        </script>
</head>
        </div>
<header> <div>
        <h1>Factura compra</h1>
          
	</header>
<body>
    
	<section>
	<?php 
	/*var_dump($_SESSION["carrito"]);
	var_dump($_SESSION["user"]);
	var_dump($_SESSION["nombre"]);*/
	$total =0;
		for($i=0; $i<count($_SESSION["carrito"]); $i++){
		$total+=$_SESSION["carrito"][$i]['Cantidad']*$_SESSION["carrito"][$i]['Precio'];
                
		?>
            
           
            
            <div class="formulario">
                 <span>Usuario: </span><span><?php echo ($_SESSION['user']);?></span><br>
                <span>Nombre: </span><span><?php echo ($_SESSION['nombre']); ?> </span><br>
                       <span> Apellido:</span><span><?php echo ($_SESSION['apellido']);?></span><br>
                        
                    <span>Producto: </span><span><?php echo $_SESSION["carrito"][$i]['Nombre'] ?> de <?php echo $_SESSION["carrito"][$i]['Marca'];?> <?php echo $_SESSION["carrito"][$i]['Descripcion'];?> <?php echo $_SESSION["carrito"][$i]['Mililitros'];?>ml familia <?php echo $_SESSION["carrito"][$i]['Familia'];?></span><br>
                    <span>Precio : <?php echo $_SESSION["carrito"][$i]['Precio'];?></span><br>
                    <span>Cantidad :<?php echo $_SESSION["carrito"][$i]['Cantidad'];?></span><br>
                   <span>Total <?php echo $total ?></span><br>
           
                               
                </center>
            </div>
             <?php } ?>
            
            
            <h1 ><br><br><br> 
                <a href='sesioncliente.php' class="aceptar">Cerrar sesion</a> </center>
            </h1>
	</section>
</body>
</html>


