  <?php
	
require '../conexion.php';
		
	$idrazon=$_REQUEST['idrazon'];
	
	
	$consultar="DELETE FROM `razon` WHERE `idrazon`='$idrazon';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>