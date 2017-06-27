  <?php
	
	require '../conexion.php';
		
		
	$idvendedor=$_REQUEST['idvendedor'];
	$nombre_vendedor=$_POST['nombre_vendedor'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	
	
	$consultar="UPDATE vendedor SET nombre_vendedor='$nombre_vendedor',cedula='$cedula',direccion='$direccion',telefono='$telefono',email='$email' WHERE idvendedor='$idvendedor'";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>