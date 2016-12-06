<?php
		include './class/Connection.class.php';
		include './class/Compras.class.php';
		
		$com=new Compras();
		$rows= $com->getAll();
		
?>
<!doctype html>
<html>
    <head>
        <title>Sistema de Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/control.css" media="screen"/>
       
    </head>
    <body>
        <header> <div id="subheader">
                <font color="#CC2EFA">
             <h1>Modulo Compras</h1</font>
                <p>El aroma perfecto para ti</p>
            
            </div>
            
            <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a href="clientes.php" >Clientes</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="empleados.php">Empleados</a></li>
                    <li><a href="perfumes.php">Perfume</a></li>
                    <li><a href="promociones.php">Promociones</a></li>
                    <li><a href="proveedor.php">Proveedor</a></li>
                    <li><a href="ventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
            </nav>
           
        <nav id="system">
           <br><br><br><br><br>
           <a href="nuevacompra.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
            
        </nav>
        </header>
        
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo Compra</th>
                                        <th>Codigo Proveedor</th>
                                        <th>Codigo Perfume</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
										<th>saldo pendiente</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_compra."</td>";
                                echo "<td>".$row->id_proveedor."</td>";
                                echo "<td>".$row->id_perfume."</td>";
                                echo "<td>".$row->cantidad."</td>";
                                echo "<td>".$row->fecha."</td>";
                                echo "<td>".$row->total."</td>";
								echo "<td>".$row->saldo."</td>";
                                echo "<td><a href='modificarcompra.php?id=".$row->id_compra."' >Modificar</a></td>";
                                echo "<td><a href='eliminarcompra.php?id=".$row->id_compra."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>