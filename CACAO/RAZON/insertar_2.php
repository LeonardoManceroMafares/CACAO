<?php
	require '../conexion.php';
	
	$idrazon=$_POST['idrazon'];
	$nombre_razon=$_POST['nombre_razon'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$ruc=$_POST['ruc'];
	$insertar="INSERT INTO razon(idrazon,nombre_razon,direccion,telefono,email,ruc) VALUES ('$idrazon','$nombre_razon','$direccion','$telefono','$email','$ruc')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>