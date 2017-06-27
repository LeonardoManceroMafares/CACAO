  <?php
	
	require '../conexion.php';
		
		
	$iditem=$_REQUEST['iditem'];
	
	
	$consultar="DELETE FROM `items` WHERE `iditem`='$iditem';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>