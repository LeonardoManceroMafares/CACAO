  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/css/New.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
 	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  </head>
  <body background= "../css/images/1.jpg">
  <nav class="menu2">
							<menu class="nav">
								<li><a href="index.html" class="selected">COMERCIAL SALINAS</a></li>
								<li><a href="insertar.php" class="selected">RAZON SOCIAL</a></li>
								<li><a href="../PROVEEDOR/insertar.php" class="selected">PROVEEDOR</a></li>
								<li><a href="../CLIENTE/insertar.php" class="selected">CLIENTE</a></li>
								<li><a href="../VENDEDOR/insertar.php" class="selected">VENDEDOR</a></li>
								<li><a href="../CATEGORIA/insertar.php" class="selected">CATEGORIA</a></li>
								<li><a href="../ITEM/insertar.php" class="selected">ITEMS</a></li>
							</menu>
				</nav>
  <div >
 
  </div>
  <?php
	
		require '../conexion.php';
		
	$idcompra=$_REQUEST['idcompra'];	
	$idproveedor=$_POST['idproveedor'];
	$nombre_proveedor=$_POST['nombre_proveedor'];
	$iditem=$_POST['iditem'];
	$fecha=$_POST['fecha'];
	$cantidad=$_POST['cantidad'];
	$valor=$_POST['valor'];
	$cancelado=$_POST['cancelado'];
	$total=$_POST['cantidad']*$_POST['valor'];
	$stock=$_POST['stock']+$_POST['cantidad'];
	
	$insertar="UPDATE compras SET idproveedor='$idproveedor',fecha='$fecha',cantidad='$cantidad',valor='$valor',cancelado='$cancelado',total='$total' WHERE idcompra='$idcompra'";
	$insertar_2="update proveedor set nombre_proveedor='$nombre_proveedor' where idproveedor='$idproveedor'";
	

	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR  COMPRA");
	$resultados=mysqli_query($conexion,$insertar_2)or die("ERROR INSERTAR REGISTRO DE PROVEEDOR");
	
	
	mysqli_close($conexion);
			if ($resultado){
					header("location:consultar.php");
				}
					else{
						echo("ERROR AL MODIFICAR EL DATO");
						
	}
	
	if ($resultados){
		header("location:consultar.php");
	}
	else{
		echo("ERROR AL MODIFICAR EL DATO");
	
	}
	?>
  
  </body>
  
  </html>
  