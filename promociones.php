<?php
		include './class/Connection.class.php';
		include './class/Promociones.class.php';
		
		$pro=new Promociones();
		$rows= $pro->getAll();
		
?>
<!doctype html>
<html>
    <head>
        <title>Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    
    <body> <div id="subheader">
                <font color="#CC2EFA">
             <h1>Modulo Promociones</h1</font>
                <p>El aroma perfecto para ti</p>
            
        </div>
        <header>
            <nav>
             <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a href="clientes.php" >Clientes</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="empleados.php">Empleados</a></li>
                    <li><a href="perfumes.php">Perfume</a></li>
                    <li><a>Promociones</a></li>
                    <li><a href="proveedor.php">Proveedor</a></li>
                    <li><a href="ventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
             </nav><br><br>
<br><br><br>                <nav id="system">
           <a href="nuevapromocion.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
           
        </header> 
        
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>codigo Perfume</th>
										<th>nombre</th>
										<th>descripcion</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Final</th>
                                        <th>precio unitario</th>
										<th>descuento</th>
                                        <th>total</th>
                                       
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_promocion."</td>";
                                echo "<td>".$row->id_perfume."</td>";
								echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->descripcion."</td>";
                                echo "<td>".$row->f_inicio."</td>";
                                echo "<td>".$row->f_final."</td>";
								echo "<td>".$row->precio_unitario"</td>";
								echo "<td>".$row->descuento"</td>";
								echo "<td>".$row->total"</td>";
                                echo "<td><a href='modificarpromocion.php?id=".$row->id_promocion."' >Modificar</a></td>";
                                echo "<td><a href='eliminarpromocion.php?id=".$row->id_promocion."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>