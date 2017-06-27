<?php

?>
<html>
<head>
<title>COMPRAS</title>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	
</head>

				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">COMPRAS</a></li>
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
				<td>IDCOMPRAS</td>
				<td>IDITEM</td>
				<td>IDPROVEEDOR</td>
				<td>NOMBRE PROVEEDOR</td>
				<td>FECHA</td>
				<td>CANTIDAD</td>
				<td>VALOR</td>
				<td>TOTAL</td>
				<td>CANCELADO</td>
			
				<td>MODIFICAR</td>
				<td>ELIMINAR</td>
				</tr>
			
							<?php
							require '../conexion.php';						
							$consultar="select idcompra,b.idproveedor,c.iditem,nombre_proveedor,fecha,a.cantidad,valor,total,cancelado,c.stock from compras a,proveedor b,items c where b.idproveedor=a.idproveedor and c.iditem = a.iditem order by idcompra asc";
							$resultado=$conexion->query($consultar);
							while ($resultados=$resultado->fetch_assoc()){
								?>
							
									<tr align="center">
									<td ><?php echo$resultados['idcompra'] ?></td>
									<td><?php echo$resultados['iditem'] ?></td>
									<td><?php echo$resultados['idproveedor'] ?></td>
									<td><?php echo$resultados['nombre_proveedor'] ?></td>
									<td><?php echo$resultados['fecha'] ?></td>
									<td><?php echo$resultados['cantidad'] ?></td>
									<td><?php echo$resultados['valor'] ?></td>
									<td><?php echo$resultados['total'] ?></td>
									<td><?php echo$resultados['cancelado'] ?></td>
									
					<td><a href="modificar.php?idcompra=<?php echo $resultados['idcompra']; ?>">MODIFICAR</a></td>
					<td><a href="eliminar.php?idcompra=<?php echo $resultados['idcompra']; ?>">ELIMINAR</a></td>
					</tr>
							
					<?php }?>
					</tbody>	
					</table>
				</div>
						
				</form>


</body>
</html>

