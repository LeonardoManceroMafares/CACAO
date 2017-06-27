  <?php
	
		require '../conexion.php';		
		
		
	$idcliente=$_REQUEST['idcliente'];
	
	
	$consultar="DELETE FROM `cliente` WHERE `idcliente`='$idcliente';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>