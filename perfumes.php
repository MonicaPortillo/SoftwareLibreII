<?php
		include './class/Connection.class.php';
		include './class/Perfumes.class.php';
		
		$per=new Perfumes();
		$rows= $per->getAll();
		
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
        <header>
            <div id="subheader">
                <font color="#C71585">
             <h1>Modulo Perfume</h1></font>
               
            
            </div>
             <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Admistrador</a></li>
                    <li><a href="clientes.php" >Clientes</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="empleados.php">Empleados</a></li>
                    <li><a>Perfume</a></li>
                    <li><a href="promociones.php">Promociones</a></li>
                    <li><a href="proveedor.php">Proveedor</a></li>
                    <li><a href="ventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>
                </ul>
            </ul>
            </nav>
           
        </header><br><br><br><br><br>
        <nav id="system">
            <a href="nuevoperfume.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Descripcion</th>
                                        <th>Ml</th>
                                        <th>Familia</th>
                                        <th>Cantidad Existente</th>
                                        <th>Precio Unitario</th>
                                        <th>Precio Mayoreo</th>
                                        <th>Precio Compra</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id_perfume."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->marca."</td>";
                                echo "<td>".$row->descripcion."</td>";
                                echo "<td>".$row->ml."</td>";
                                echo "<td>".$row->familia."</td>";
                                echo "<td>".$row->cantidad_existente."</td>";
                                echo "<td>".$row->precio_unitario."</td>";
                                echo "<td>".$row->precio_mayoreo."</td>";
                                echo "<td>".$row->precio_compra."</td>";
                                echo "<td><a href='modificarperfume.php?id_perfume=".$row->id_perfume."' >Modificar</a></td>";
                                echo "<td><a href='eliminarperfume.php?id=".$row->id_perfume."' >Eliminar</a></td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>