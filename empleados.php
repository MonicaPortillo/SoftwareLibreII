<?php
		include './class/Connection.class.php';
		include './class/Empleados.class.php';
		
		$emp=new Empleados();
		$rows= $emp->getAll();
		
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
        <header><div id="subheader">
                <font color="#C71585">
             <h1>Modulo Empleados</h1</font>
              
            
            </div>
           <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a href="clientes.php" >Clientes</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a>Empleados</a></li>
                    <li><a href="perfumes.php">Perfume</a></li>
                    <li><a href="promociones.php">Promociones</a></li>
                    <li><a href="proveedor.php">Proveedor</a></li>
                    <li><a href="ventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
            </nav>
           
        </header>
        <nav id="system">
           <br><br><br><br><br>
           <a href="nuevoempleado.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
            
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
                                        <th>Dui</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Telefono</th>
										<th>Fecha de Inicio</th>
                                        <th>Puesto</th>
                                        <th>Sueldo</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_empleado."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->apellido."</td>";
                                echo "<td>".$row->direccion."</td>";
                                echo "<td>".$row->dui."</td>";
                                echo "<td>".$row->f_nacimiento."</td>";
								echo "<td>".$row->telefono."</td>";
                                echo "<td>".$row->f_inicio."</td>";
                                echo "<td>".$row->puesto."</td>";
                                echo "<td>".$row->salario."</td>";
                                echo "<td><a href='modificarempleado.php?id=".$row->id_empleado."' >Modificar</a></td>";
                                echo "<td><a href='eliminarempleado.php?id=".$row->id_empleado."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>

