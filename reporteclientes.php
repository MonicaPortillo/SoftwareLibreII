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
        
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
       
    </head>
    <body>
        <header>
           <div id="subheader">
                <font color="#FFFF00">
                <h1>REPORTES CLIENTE</h1></font>
               <p>El aroma perfecto para ti</p>
            
            </div>
           
        </header>
         <nav>
                <ul class="nav">
                    <li><a href="menuadmin.php" >Menu Administrador</a></li>
                    <li><a>Clientes</a></li>
                    <li><a href="reportecompras.php">Compras</a></li>
                    <li><a href="reporteperfumes.php">Perfume</a></li>
                    <li><a href="reporteventas.php">Ventas</a></li>
                    <li><a href="salir.php">Salir</a></li></ul>
            </ul>
            </nav>
        <section>
            <div id="wrapp"  align="center"> <br><br>
<br>                            <br>
                          <table border="3" id="">
                                <thead>
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Direccion</th>
										<th>Dui</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
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
								echo "<td>".$row->dui."</td>";
                                echo "<td>".$row->tel."</td>";
                                echo "<td>".$row->email."</td>";
                            echo "</tr>";
                        endforeach;
                        echo "</tbody>";
                    echo "</table></div>";
                   
            ?>
        </section>
        
    </body>
</html>
