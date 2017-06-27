<?php
	require '../conexion.php';		
	
	$idcliente=$_POST['idcliente'];
	$nombre_cliente=$_POST['nombre_cliente'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	$insertar="INSERT INTO cliente(idcliente,nombre_cliente,cedula,direccion,telefono,email) VALUES ('$idcliente','$nombre_cliente','$cedula','$direccion','$telefono','$email')";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	mysqli_close($conexion);
		if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>