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
        
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    <body>
        <header><div id="subheader">
                <font color="#FFFF00">
                <h1>REPORTES COMPRAS</h1></font>
               <p>El aroma perfecto para ti</p>
            
            </div>
            <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Administrador</a></li>
                    <li><a href="reporteclientes.php" >Clientes</a></li>
                    <li><a>Compras</a></li>
                    <li><a href="reporteperfumes.php">Perfume</a></li>
                    <li><a href="reporteventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li>    
                </ul>
            </ul>
            </nav>
           
        </header>
        
        <section>
            <div id="wrapp" align="center"><br><br><br><br>
<br>                            
                            <table border="3" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo Compra</th>
                                        <th>Codigo Proveedor</th>
                                        <th>Codigo Perfume</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Total</th>
										 <th>saldo pendiente</th>
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
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
       
    </body>
</html>
