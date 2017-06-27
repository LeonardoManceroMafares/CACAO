<?php
	require '../conexion.php';
	
	$idvendedor=$_POST['idvendedor'];
	$nombre_vendedor=$_POST['nombre_vendedor'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	$insertar="INSERT INTO vendedor(idvendedor,nombre_vendedor,cedula,direccion,telefono,email) VALUES ('$idvendedor','$nombre_vendedor','$cedula','$direccion','$telefono','$email')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
	if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>