<?php
include './co.php';
	if(!isset($_POST['id_perfume']) &&  !isset($_POST['nombre']) && !isset($_POST['marca'])&& !isset($_POST['descripcion'])&& !isset($_POST['ml'])&& !isset($_POST['familia'])&& !isset($_POST['marca'])&& !isset($_POST['cantidad_existente'])&& !isset($_POST['precio_unitario'])&& !isset($_POST['precio_mayoreo'])&& !isset($_POST['precio_compra'])){
		header("Location: agregarproducto.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../productos/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"./productos/" .$random.'_'.$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "./productos/" .$random.'_'. $_FILES["file"]["name"];
		      		$id_perfume=$_POST['id_perfume'];
                                $nombre=$_POST['nombre'];
                                $marca=$_POST['marca'];
                                $descripcion=$_POST['descripcion'];
                                $ml=$_POST['ml'];
                                $familia=$_POST['familia'];
                                $cantidad_existente=$_POST['cantidad_existente'];
                                $precio_unitario=$_POST['precio_unitario'];
                                $precio_mayoreo=$_POST['precio_mayoreo'];
                                $precio_unitario=$_POST['precio_compra'];
				$Sql="insert into perfume (id_perfume,nombre,marca,descripcion,ml,familia,cantidad_existente,precio_unitario,precio_mayoreo,precio_compra,imagen) values(
							'".$id_perfume."',
                                                        '".$nombre."',
                                                        '".$marca."',
							'".$descripcion."',
                                                        '".$ml."',
                                                        '".$familia."',
                                                        '".$cantidad_existente."',
							'".$precio_unitario."',
							'".$precio_mayoreo."',
							'".$precio_compra."',
							'".$imagen."')";
					mysql_query($Sql);
					header ("Location: nuevoperfume.php");
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
