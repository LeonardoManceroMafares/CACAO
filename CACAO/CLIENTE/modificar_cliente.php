  <?php
	
		require '../conexion.php';		
		
		
	$idcliente=$_REQUEST['idcliente'];
	$nombre_cliente=$_POST['nombre_cliente'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	
	
	$consultar="UPDATE cliente SET nombre_cliente='$nombre_cliente',cedula='$cedula',direccion='$direccion',telefono='$telefono',email='$email' WHERE idcliente='$idcliente'";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>