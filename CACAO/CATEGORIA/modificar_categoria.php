  <?php
	
		require '../conexion.php';				
	
	$idcategoria=$_REQUEST['idcategoria'];
	$nombre_categoria=$_POST['nombre_categoria'];
		
	
	$consultar="UPDATE categoria SET nombre_categoria='$nombre_categoria' WHERE idcategoria='$idcategoria'";
	$resultado=$conexion->query($consultar);
	if ($resultado){
		header("location:consultar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>