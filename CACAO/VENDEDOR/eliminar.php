  <?php
	
	require '../conexion.php';
		
		
	$idvendedor=$_REQUEST['idvendedor'];
	
	
	$consultar="DELETE FROM `vendedor` WHERE `idvendedor`='$idvendedor';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>