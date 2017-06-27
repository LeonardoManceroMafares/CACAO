
<html>
<head>
<title>MODIFICAR ITEMS</title>
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
		$iditem=$_REQUEST['iditem'];
	
		require '../conexion.php';
				
										$consultar="select iditem,b.idcategoria,c.idrazon,d.idproveedor,nombre_categoria,nombre_razon,nombre_proveedor,pvp,cantidad,cantidad,stock from items a, categoria b,razon c, proveedor d where a.idcategoria=b.idcategoria and a.idrazon=c.idrazon and a.idproveedor=d.idproveedor and iditem='$iditem'";
										$resultado=$conexion->query($consultar);
										$resultados=$resultado->fetch_array();
										
								?>
			<div  style="width: 70%; padding-left: 17%;" >				
			<form action="modificar_item.php?iditem=<?php echo $resultados['iditem']; ?>" method="post">
			              
			                 
			<br><br><br><br>
						<div align="center" style="background: #58ACFA;"><br><br>
						<input style="visibility:hidden;" name="idcategoria"  value="<?php echo $resultados['idcategoria']; ?>"> 
						<input style="visibility:hidden;" name="idrazon" value="<?php echo $resultados['idrazon']; ?>">			
						<input style="visibility:hidden;" name="idproveedor"  value="<?php echo $resultados['idproveedor']; ?>"> 
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="NOMBRE CATEGORIA" required="required" name="nombre_categoria" value="<?php echo $resultados['nombre_categoria']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="NOMBRE PROVEEDOR" required="required" name="nombre_proveedor" value="<?php echo $resultados['nombre_proveedor']; ?>"></th><br><br>				
					    <th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="PVP" required="required" name="pvp" value="<?php echo $resultados['pvp']; ?>"></th><br><br>		
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="CANTIDAD" required="required" name="cantidad" value="<?php echo $resultados['cantidad']; ?>"></th><br><br>		
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="STOCK" required="required" name="stock" value="<?php echo $resultados['stock']; ?>"></th><br><br>	
						<input style="font-family: fantasy;font-size: 20px; background: #FF0040;color: black;" type="submit" required="required" name="enviar" value=ACEPTAR><br><br>
					
					</div>
			</form>
			</div>	
</body>
</html>