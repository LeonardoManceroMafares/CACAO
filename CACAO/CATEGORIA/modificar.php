
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">COMERCIAL SALINAS</a></li>
								<li><a href="../index.html"  class="selected">CATEGORIA</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav><br><br><br><br><br><br>

<body background="../css/images/1.jpg">

		<div align="center">
			<h1  style="background: white; width: 50%;font-family: cursive; ">MODIFICAR INFORMACION</h1>
		</div>
		<?php
		$idcategoria=$_REQUEST['idcategoria'];
	require '../conexion.php';
				
										$consultar="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
										$resultado=$conexion->query($consultar);
										$resultados=$resultado->fetch_array();
										
								?>
			<div  style="width: 70%; padding-left: 17%;" >				
			<form action="modificar_categoria.php?idcategoria=<?php echo $resultados['idcategoria']; ?>" method="post">
			              
			                 
			<br><br><br><br>
						<div align="center" style="background: #58ACFA;"><br><br>
						<input style="font-family: fantasy;font-size: 20px" type="text" placeholder="NOMBRE" required="required" name="nombre_categoria" value="<?php echo $resultados['nombre_categoria']; ?>"><br><br>				
						<input style="font-family: fantasy;font-size: 20px; background: #FF0040;color: black;" type="submit" required="required" name="enviar" value=ACEPTAR><br><br>
					</div>
			</form>
			</div>	
</body>
</html>