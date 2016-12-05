<?php
session_start();
include './class/Connection.class.php';
json_encode(print_r($_SESSION['precio']));
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
            <h1>Facturacion</h1>
             
           
           
        </header>
        
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                       
    </body>
</html>

