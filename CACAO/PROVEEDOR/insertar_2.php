<?php
	require '../conexion.php';
	
	$idrazon=$_POST['idrazon'];
	$nombre_proveedor=$_POST['nombre_proveedor'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	$insertar="INSERT INTO proveedor(idproveedor,nombre_proveedor,cedula,direccion,telefono,email) VALUES ('$idrazon','$nombre_proveedor','$cedula','$direccion','$telefono','$email')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>