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
        
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    <body><div id="subheader">
                <font color="#FFFF00">
                <h1>REPORTES PERFUMES</h1></font>
               <p>El aroma perfecto para ti</p>
            
            </div>
	
        <header>
             <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Administrador</a></li>
                    <li><a href="reporteclientes.php" >Clientes</a></li>
                    <li><a href="reportecompras.php">Compras</a></li>
                    <li><a>Perfume</a></li>
                    <li><a href="reporteventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li></ul>
            </ul>
            </nav>
           
        </header>
        
        <section>
            <div id="wrapp" align="center"><br><br><br><br>
<br>                            
                            <table border="3" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Marca</th>
										<th>Descripcion</th>
                                        <th>Ml</th>
										<th>familia</th>
										<th>cantidad existente</th>
										<th>precio unitario</th>
										<th>precio mayoreo</th>
                                        <th>precio compra</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        foreach($rows as $row):
                            echo "<tr>";
                                echo "<td>".$row->id."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->marca."</td>";
								echo "<td>".$row->descripcion."</td>";
                                echo "<td>".$row->ml."</td>";
                              echo "<td>".$row->familia."</td>";
							  echo "<td>".$row->cantidad existente."</td>";
							  echo "<td>".$row->precio unitario."</td>";
							  echo "<td>".$row->precio mayoreo."</td>";
                                echo "<td>".$row->precio compra."</td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>

