  <?php
	
		require '../conexion.php';
		
		
	$idcategoria=$_REQUEST['idcategoria'];
	
	
	$consultar="DELETE FROM `categoria` WHERE `idcategoria`='$idcategoria';";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL ELIMINAR EL DATO");
			
	}
	?>