  <?php
	
		require '../conexion.php';
		
		
	$idproveedor=$_REQUEST['idproveedor'];
	
	
	$consultar="DELETE FROM `proveedor` WHERE `idproveedor`='$idproveedor';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>