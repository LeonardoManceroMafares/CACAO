  <?php
	
		require '../conexion.php';
		
		
	$idproveedor=$_REQUEST['idproveedor'];
	$nombre_proveedor=$_POST['nombre_proveedor'];
	$cedula=$_POST['cedula'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	
	
	$consultar="UPDATE proveedor SET nombre_proveedor='$nombre_proveedor',cedula='$cedula',direccion='$direccion',telefono='$telefono',email='$email' WHERE idproveedor='$idproveedor'";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>