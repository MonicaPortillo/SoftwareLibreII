<?php
		include './class/Connection.class.php';
		include './class/Proveedores.class.php';
		
		$prov=new Proveedores();
		$rows= $prov->getAll();
		
?>
<!doctype html>
<html>
    <head>
        <title>Sistema de Boutique</title>
        <link rel="stylesheet" href="css/styles.css" media="screen"/>
        <link rel="stylesheet" href="css/tablestyle.css" media="screen"/>
        
        <link rel="stylesheet" href="css/control.css" media="screen"/>
       
    </head>
    
    <body><div id="subheader">
                <font color="#C71585">
             <h1>Modulo Proveedores</h1></font>
                
            
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
                    <li><a>Proveedor</a></li>
                    <li><a href="ventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
             </nav><br><br>
<br><br><br>            <nav id="system">
            <a href="nuevoproveedor.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
        </header>
        
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
										<th>saldo</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_proveedor."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->direccion."</td>";
                                echo "<td>".$row->tel."</td>";
                                echo "<td>".$row->email."</td>";
								 echo "<td>".$row->saldo."</td>";
                                echo "<td><a href='modificarproveedor.php?id=".$row->id_proveedor."' >Modificar</a></td>";
                                echo "<td><a href='eliminarproveedor.php?id=".$row->id_proveedor."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
       
    </body>
</html>