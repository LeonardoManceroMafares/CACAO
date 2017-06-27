  <?php
	
		require '../conexion.php';		
		
		
	$idcompra=$_REQUEST['idcompra'];
	
	
	$consultar="DELETE FROM `compras` WHERE `idcompra`='$idcompra';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>