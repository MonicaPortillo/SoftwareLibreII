<?php
		include './class/Connection.class.php';
		include './class/Clientes.class.php';
		
		$cli=new Clientes();
		$rows= $cli->getAll();
		
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
    <br>
	 <header>
             <div id="subheader">
                <font color="#C71585">
                <h1 >Modulo Clientes</h1></font><br></br>
              
            
            </div>
           
        </header>
         <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a>Clientes</a></li>
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
        <br>
        <nav id="system">
           <br><br><br>
            <a href="nuevocliente.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
            
        </nav>
        <section>
                      
                     <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Dui</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_cliente."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->apellido."</td>";
                                echo "<td>".$row->direccion."</td>";
                                echo "<td>".$row->tel."</td>";
                                echo "<td>".$row->dui."</td>";
                                echo "<td>".$row->email."</td>";
                                echo "<td><a href='modificarcliente.php?id=".$row->id_cliente."' >Modificar</a></td>";
                                echo "<td><a href='eliminarcliente.php?id=".$row->id_cliente."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>