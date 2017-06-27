<?php
	require '../conexion.php';		
	

	$idproveedor=$_POST['idproveedor'];
	$iditem=$_POST['iditem'];
	$fecha=$_POST['fecha'];
	$cantidad=$_POST['cantidad'];
	$valor=$_POST['valor'];
	$cancelado=$_POST['cancelado'];
	$total=$_POST['cantidad']*$_POST['valor'];
	$stock=$_POST['stock']+$_POST['cantidad'];
	
	$insertar="INSERT INTO compras(idproveedor,iditem,fecha,valor,cantidad,cancelado,total) VALUES ('$idproveedor','$iditem','$fecha','$valor','$cantidad','$cancelado','$total')";
	$insertar_2="update items set stock=stock +'$stock' where iditem='$iditem'";
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	$resultados=mysqli_query($conexion,$insertar_2)or die("ERROR INSERTAR REGIS");
	mysqli_close($conexion);
if ($resultado){
		header("location:insertar.php");
	}
		else{
			echo("ERROR AL MODIFICAR EL DATO");
			
	}
	?>