<?php

?>
<html>
<head>
<title>VENTAS</title>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	
</head>

				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">VENTAS</a></li>
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
				<td>IDVENTAS</td>
				<td>IDCLIENTE</td>
				<td>IDCLIENTE</td>
				<td>IDVENDEDOR</td>
				<td>NOMBRE CLIENTE</td>
				<td>NOMBRE VENDEDOR</td>
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
							$consultar="select idventa,b.idcliente,d.idvendedor,c.iditem,nombre_cliente,nombre_vendedor,fecha,a.cantidad,valor,total,cancelado,c.stock from venta a,cliente b,items c,vendedor d where b.idcliente=a.idcliente and c.iditem = a.iditem and d.idvendedor=a.idvendedor order by idventa asc";
							$resultado=$conexion->query($consultar);
							while ($resultados=$resultado->fetch_assoc()){
								?>
							
									<tr align="center">
									<td ><?php echo$resultados['idventa'] ?></td>
									<td ><?php echo$resultados['idcliente'] ?></td>
									<td><?php echo$resultados['iditem'] ?></td>
									<td><?php echo$resultados['idvendedor'] ?></td>
									<td><?php echo$resultados['nombre_cliente'] ?></td>
									<td><?php echo$resultados['nombre_vendedor'] ?></td>
									<td><?php echo$resultados['fecha'] ?></td>
									<td><?php echo$resultados['cantidad'] ?></td>
									<td><?php echo$resultados['valor'] ?></td>
									<td><?php echo$resultados['total'] ?></td>
									<td><?php echo$resultados['cancelado'] ?></td>
									
					<td><a href="modificar.php?idventa=<?php echo $resultados['idventa']; ?>">MODIFICAR</a></td>
					<td><a href="eliminar.php?idventa=<?php echo $resultados['idventa']; ?>">ELIMINAR</a></td>
					</tr>
							
					<?php }?>
					</tbody>	
					</table>
				</div>
						
				</form>


</body>
</html>

