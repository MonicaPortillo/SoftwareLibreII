<?php
session_start();
if($_POST){
	$_SESSION["user"] = $_POST["user"];
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
<div align="center"><img src="http://fashiontotal.galeon.com/perfume3.gif" width="150">
        </div>
<header> <div>
        <h1>Producto/s a Comprar</h1><br><br><br>
            </div>
                <fieldset class="formulario"  > Usuario: 
			<?php echo ($_SESSION['user']);?><br>
			Nombre: 
			<?php echo ($_SESSION['nombre']); ?> <br>
                        Apellido:
                        <?php echo ($_SESSION['apellido']);?><br>
                        <form method="post" action="compra.php" >
                 Numero de Tarjeta
                 <INPUT class="input" TYPE="TEXT" NAME="tarjeta" id="fpagar"/><br>
			</form>
		</fieldset>
	</header>
<body>
    
    <br><br><br><br><br><br>
	<section>
	<?php 
	/*var_dump($_SESSION["carrito"]);
	var_dump($_SESSION["user"]);
	var_dump($_SESSION["nombre"]);*/
	$total =0;
		for($i=0; $i<count($_SESSION["carrito"]); $i++){
		$total+=$_SESSION["carrito"][$i]['Cantidad']*$_SESSION["carrito"][$i]['Precio'];
                
		?>
            
           
            
            <div class="producto">
                <center>
                    <img src="./productos/<?php echo $_SESSION["carrito"][$i]['Imagen'];?>"><br>
                    <span>Producto: </span><br><span><?php echo $_SESSION["carrito"][$i]['Nombre'] ?> de <?php echo $_SESSION["carrito"][$i]['Marca'];?> <?php echo $_SESSION["carrito"][$i]['Descripcion'];?> <?php echo $_SESSION["carrito"][$i]['Mililitros'];?>ml familia <?php echo $_SESSION["carrito"][$i]['Familia'];?></span><br>
                    <span>Precio : <?php echo $_SESSION["carrito"][$i]['Precio'];?></span><br>
                    <span>Cantidad :<input type="text" value="<?php echo $_SESSION["carrito"][$i]['Cantidad'];?>"
                        data-precio="<?php echo $_SESSION["carrito"][$i]['Precio'];?>"
                        data-id="<?php echo $_SESSION["carrito"][$i]['Id'];?>"
                        class="cantidad">
                               </span><br>
                               <span class="subtotal">Subtotal : $<?php echo $_SESSION["carrito"][$i]['Cantidad']*$_SESSION["carrito"][$i]['Precio'];?></span><br>
                              
                </center>
            </div>
        <?php } ?>
            
            
            <h1 ><br><br><br> <?php echo '<center><h1 id="total"> Total a pagar: '.$total.'</h1></center>';
           
            echo "  <center><a href='compra.php'>Comprar Ahora</a> </center>";
            ?>
            </h1>
	</section>
</body>
</html>

