<?php
	require '../conexion.php';
	$pvp=$_POST['pvp'];
	$stock=$_POST['stock'];
	$idrazon=$_POST['idrazon'];
	$nombre_razon=$_POST['nombre_razon'];
	$idproveedor=$_POST['idproveedor'];
	$nombre_razon=$_POST['nombre_razon'];
	$idcategoria=$_POST['idcategoria'];
	$nombre_razon=$_POST['nombre_razon'];
	$cantidad=$_POST['cantidad'];
	$stock=$_POST['cantidad']+$_POST['stock'];
	
	$insertar="INSERT INTO `items`(`pvp`, `stock`,`idrazon`, `idproveedor`, `idcategoria`, `cantidad`) VALUES ('$pvp','$stock','$idrazon','$idproveedor','$idcategoria','$cantidad')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
	if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>