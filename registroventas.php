<?php
include './co.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Registro de Ventas</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	

	<center><h1>Compra Realizada</h1></center>
	<table border="1px" width="100%">	
		<tr>
                    
			
            <td>Nombre Perfume</td>
			<td>Nombre Cliente</td>
			<td>Total a pagar</td>
			<td>Ml</td>
			<td>Descripcion</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>	
		<?php
			$re=mysql_query("select * from comprasonline");
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
                        <td>'.$f['Id'].'</td>
						<td>'.$f['nombre'].'</td>
                        <td>'.$f['marca'].'</td>
                        <td>'.$f['ml'].'</td>
                        <td>'.$f['descripcion'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>

					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>