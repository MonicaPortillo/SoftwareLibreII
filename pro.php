<?php
		include './class/Connection.class.php';
		include './class/Perfumes.class.php';
                
		$per=new Perfumes();
		$rows= $per->getAll();
		?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    <body>
	<img src ="http://muestrasgratis.com.es/wp-content/uploads/2009/11/perfume_mellow_de_roberto_verino.jpg" width="100">
         <nav>
                <ul class="nav">
                  <li><a href="sesioncliente.php" >Incio</a></li>
                    <li><a href="nosotros.php" >Nosotros</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="ofertas.php" >Ofertas</a></li>
                    <li><a href="salir.php" >Salir</a></li>
                </ul>
            </ul>
            </nav</header>
        
        <section>
                        <div id="wrapp">
                            
                            <table id="box-table-a">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
                                        <th>Ml</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
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
                                echo "<td>".$row->ml."</td>";
                                echo "<td>".$row->descripcion."</td>";
                                echo "<td>".$row->precio."</td>";
                                        
                                echo "<td><a href='cesta.php?id=".$row->id_perfume."' >Añadir a cesta</a></td>"; 
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        <nav id="system">
            <a href="admin.php"><img src="imgs/atras.png" alt="Atras" title="Atras"></a>
            <a href="nuevoperfume.php"><img src="imgs/nuevo.png" alt="Nuevo" title="Nuevo"></a>
        </nav>
    </body>
</html>

