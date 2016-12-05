<?php
session_start();

include './co.php';
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Boutique</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilos.css" media="screen"/>
    </head>

    <body>
        <header>
            <h1>Nuevo Perfume</h1>
        </header>
		<h1>Introduce Datos</h1>
        <section>
           <form action="altaproducto.php" method = "post" enctype="multipart/form-data">
		
               <fieldset>
			ID<br>
			<input type="text" name="id_perfume">
		</fieldset><fieldset>
			Nombre<br>
			<input type="text" name="nombre">
		</fieldset>
               <fieldset>
			Marca<br>
			<input type="text" name="marca">
		</fieldset>
               
		<fieldset>
			Descripción<br>
			<input type="text" name="descripcion">
		</fieldset>
               <fieldset>
			Ml<br>
			<input type="text" name="ml">
		</fieldset>
               <fieldset>
			Familia<br>
			<input type="text" name="familia">
		</fieldset>
               <fieldset>
			Cantidad Existente<br>
			<input type="text" name="cantidad_existente">
		</fieldset>
               
               <fieldset>
			Precio Unitario<br>
			<input type="text" name="precio_unitario">
		</fieldset>
               <fieldset>
			Precio Mayoreo<br>
			<input type="text" name="precio_mayoreo">
		</fieldset>
               <fieldset>
			Precio Compra<br>
			<input type="text" name="precio_compra">
		</fieldset>
		<fieldset>
			Imagen<br>
			<input type="file" name="file">
		</fieldset>
		
		<input type="submit" name="accion" value="Enviar" class="aceptar">
	</form>	
	
		</form>
	</section>			 
			<?php
		  "<br>";
     echo "<a href='perfumes.php'>Regresar</a>";
	 ?>
        </section>
        </section>
    </body>
</html>