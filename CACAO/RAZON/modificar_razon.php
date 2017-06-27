  <?php
	
		require '../conexion.php';
		
		
	$idrazon=$_REQUEST['idrazon'];
	$nombre_razon=$_POST['nombre_razon'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$ruc=$_POST['ruc'];
	
	
	$consultar="UPDATE razon SET nombre_razon='$nombre_razon',direccion='$direccion',telefono='$telefono',email='$email',ruc='$ruc' WHERE idrazon='$idrazon'";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>