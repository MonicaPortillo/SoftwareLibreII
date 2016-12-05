<?php
session_start();
if($_POST):
	$_SESSION['idp'][] = $_POST['idp'];
	$_SESSION['precio'][] = $_POST['precio'];
	header("location: carritoproductos.php");
	for($i=0; $i<count($_SESSION['idp']); $i++):
		echo $_SESSION['idp'][$i].": ";
		echo $_SESSION['precio'][$i];
		echo "<br/>";
	endfor;
endif;
?>

<!doctype html>
<html>
    <head>
        <title>Sistema de Control</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			
				$cantidad = parseFloat($("#cantidad").val());
				$precio = parseFloat($("#precio").val());
				$("#total").val($cantidad*$precio);
				$("#cantidad").keyup(function(){
					$cantidad = parseFloat($("#cantidad").val());
					$precio = parseFloat($("#precio").val());
					$("#total").val($cantidad*$precio);
				});
				
				$("#cantidad").click(function(){
					$cantidad = parseFloat($("#cantidad").val());
					$precio = parseFloat($("#precio").val());
					$("#total").val($cantidad*$precio);
				});
			});
		</script>
    </head>
    <body>
        <header>
            <h1>Modulo Perfumes</h1>
        </header>
        <section>
            <?php 
			if($_GET):
                    $data = mysql_query("SELECT * FROM perfume WHERE id_perfume='".$_GET['id_perfume']."'")
                        
                    ?>
            <nav id="system">
            <a href="ingresar.php"><img src="imagenes/atras.png" alt="Atras" title="Atras"></a>
            <a href="nuevoperfume.php"><img src="imagenes/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
                            <div id="wrapp">
                                
                                <?php
                                echo "<form method='post'>";
                                ?>
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Descripcion</th>
                                        <th>Ml</th>
                                        <th>Familia</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Accion</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                        <?php
						
                        while($d = mysql_fetch_array($data)):
                            echo "<tr>";
								
                                echo "<td>  <input type='text' size='8' disabled value=".$d['id_perfume']." /> <input type='hidden' size='8' name='idp' value=".$d['id_perfume']." /></td>";
                                echo "<td>".$d['nombre']."</td>";
                                echo "<td>".$d['marca']."</td>";
                                echo "<td>".$d['descripcion']."</td>";
                                echo "<td>".$d['ml']."</td>";
                                echo "<td>".$d['familia']."</td>";
                                echo "<td> <input type='text' size='8' disabled id='precio'  value=".$d['precio']." /> <input type='hidden' size='8' name='precio' value=".$d['precio']." /></td>";
                                echo "<td>"?> <input type="number" id="cantidad" name="cantidad" min="1" value="1" required style="width:40px;height:17px"/><?php  "</td>";
                                echo "<td>"?> <input type="text" id="total"  size="8" disabled /><?php  "</td>";
								echo "<td><input type='submit' /> </td>";
								echo "";
                            echo "</tr>";
                            
                        endwhile;
						
                        echo "</tbody>";
                    echo "</table>";
					echo "</form></div>";
                    ?>
                                
                                    <?php
                    endif;
            
           
            ?>
        </section>
		<a href="productos.php">Comprar Mas</a><br/>
		<a href="pago.php">Iniciar Pago</a>
    </body>
</html>





