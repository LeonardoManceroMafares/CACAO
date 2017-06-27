<?php
require '../conexion.php';
	
	$idcategoria=$_POST['idcategoria'];
	$nombre_categoria=$_POST['nombre_categoria'];
	
	
	$insertar="INSERT INTO categoria(idcategoria,nombre_categoria) VALUES ('$idcategoria','$nombre_categoria')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
	if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>