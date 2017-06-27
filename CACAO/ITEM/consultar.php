<?php

?>
<html>
<head>
<title>ITEMS</title>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	
</head>

				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">ITEMS</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav><br><br><br><br><br><br>
				
<body background="../css/images/1.jpg">
<div align="center">
<h1  style="background: white; width: 50%;">MODIFICAR Y ELIMINAR INFORMACION</h1>
</div>
				<form action="">
				<div align="center" style="padding-top: 5%">
				<table class="estilo2" border="5" style="font-family: fantasy; font-size: 18px;width: 90%;background: #A4A4A4">
					<thead>
					</thead>
					<tbody>
					<tr align="center" style="font-size: 22px">
				<td>IDITEMS</td>
				<td>IDCATEGORIA</td>
				<td>IDRAZON</td>
				<td>IDPROVEEDOR</td>
				<td>CATEGORIAS</td>
				<td>RAZON SOCIAL</td>
				<td>PROVEEDOR</td>
				<td>PVP</td>
				<td>CANTIDAD</td>
				<td>STOCK</td>
				<td>MODIFICAR</td>
				<td>ELIMINAR</td>
				</tr>
			
							<?php
							require '../conexion.php';				
							$consultar="select iditem,b.idcategoria,c.idrazon,d.idproveedor,nombre_categoria,nombre_razon,nombre_proveedor,pvp,cantidad,stock from items a, categoria b,razon c, proveedor d where b.idcategoria=a.idcategoria and c.idrazon=a.idrazon and d.idproveedor=a.idproveedor";
							$resultado=$conexion->query($consultar);
							while ($resultados=$resultado->fetch_assoc()){
								?>
							
									<tr align="center">
									<td ><?php echo$resultados['iditem'] ?></td>
									<td><?php echo$resultados['idcategoria'] ?></td>
									<td ><?php echo$resultados['idrazon'] ?></td>
									<td><?php echo$resultados['idproveedor'] ?></td>
									<td><?php echo$resultados['nombre_categoria'] ?></td>
									<td><?php echo$resultados['nombre_razon'] ?></td>
									<td><?php echo$resultados['nombre_proveedor'] ?></td>
									<td><?php echo$resultados['pvp'] ?></td>
									<td><?php echo$resultados['cantidad'] ?></td>
									<td><?php echo$resultados['stock'] ?></td>
									
									
					<td><a href="modificar.php?iditem=<?php echo $resultados['iditem']; ?>">MODIFICAR</a></td>
					<td><a href="eliminar.php?iditem=<?php echo $resultados['iditem']; ?>">ELIMINAR</a></td>
					</tr>
							
					<?php }?>
					</tbody>	
					</table>
				</div>
						
				</form>


</body>
</html>

