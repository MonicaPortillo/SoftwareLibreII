<?php
		include './class/Connection.class.php';
		include './class/Ventas.class.php';
		
		$ven=new Ventas();
		$rows= $ven->getAll();
		
?>
<!doctype html>
<html>
    <head>
        <title>Sistema de Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    <body><div id="subheader">
                <font color="#CC2EFA">
             <h1>Modulo Ventas</h1</font>
                <p>El aroma perfecto para ti</p>
            
        </div>
        <header>
            
            <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a href="clientes.php" >Clientes</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="empleados.php">Empleados</a></li>
                    <li><a href="perfumes.php">Perfume</a></li>
                    <li><a href="promociones.php">Promociones</a></li>
                    <li><a href="proveedor.php">Proveedor</a></li>
                    <li><a>Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
             </nav><br><br>
<br><br><br>            <nav id="system">
    <a href="nuevaventa.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
        </header>
        
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo Venta</th>
                                        <th>Codigo Cliente</th>
                                        <th>Codigo Perfume</th>
										<th>Codigo empleado</th>
										<th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>id_promocion</th>
										<th>Codigo Perfume</th>
										
                                        <th>Total</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_venta."</td>";
                                echo "<td>".$row->id_cliente."</td>";
                                echo "<td>".$row->id_perfume."</td>";
								echo "<td>".$row->id_empleado."</td>";
								echo "<td>".$row->cantidad."</td>";
                                echo "<td>".$row->fecha."</td>";
                                echo "<td>".$row->id_promocion."</td>";
                                echo "<td>".$row->total."</td>";
                                echo "<td><a href='modificarventa.php?id=".$row->id_venta."' >Modificar</a></td>";
                                echo "<td><a href='eliminarventa.php?id=".$row->id_venta."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
       
    </body>
</html>