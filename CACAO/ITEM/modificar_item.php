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
  <h1 align="center" style="padding-top: 15%; font-family: fantasy;font-size:100px;color: #FF0040">ERROR AL MODIFICAR EL DATO</h1>
   <h1 align="center" style="padding-top: 0%; font-family: fantasy;font-size:100px;color: #FF0040">DEBE ESCOGER INFORMACION ALMACENDA</h1>
  
  </div>
  <?php
	
	require '../conexion.php';
		
		
	$iditem=$_REQUEST['iditem'];
	$idcategoria=$_REQUEST['idcategoria'];
	$idrazon=$_REQUEST['idrazon'];
	$idproveedor=$_REQUEST['idproveedor'];
	$nombre_categoria=$_POST['nombre_categoria'];
	$nombre_razon=$_POST['nombre_razon'];
	$nombre_proveedor=$_POST['nombre_proveedor'];
	$cantidad=$_POST['cantidad'];
	$pvp=$_POST['pvp'];
	$stock=$_POST['stock'];

	$insertar="UPDATE items SET idcategoria='$idcategoria',idrazon='$idrazon',idproveedor='$idproveedor',pvp='$pvp',stock='$stock',cantidad='$cantidad' WHERE iditem='$iditem'";
	$insertar_2="update categoria set nombre_categoria='$nombre_categoria' where idcategoria='$idcategoria'";
	$insertar_3="update proveedor set nombre_proveedor='$nombre_proveedor' where idproveedor='$idproveedor'";
	
	$resultado=mysqli_query($conexion, $insertar)or die("ERROR INSERTAR REGISTRO");
	$resultados=mysqli_query($conexion,$insertar_2)or die("ERROR INSERTAR REGIS");
	$result=mysqli_query($conexion,$insertar_3)or die("ERROR INSERTAR REGISTRO DEL PROVEEDOR");
	
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
	
  		if ($result){
		header("location:consultar.php");
	}
	else{
		echo("ERROR AL MODIFICAR EL DATO");
	
	}
	?>
  </body>
  
  </html>
  