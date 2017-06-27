<?php

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	
</head>

				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">VENDEDOR</a></li>
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
				<table class="estilo2" border="5" style="font-family: fantasy; font-size: 20px;width: 80%;background: #A4A4A4">
					<thead>
					</thead>
					<tbody>
					<tr align="center" style="font-size: 25px">
				<td>IDVENDEDOR</td>
				<td>NOMBRE</td>
				<td>CEDULA</td>
				<td>DIRECCION</td>
				<td>TELEFONO</td>
				<td>EMAIL</td>
				<td>MODIFICAR</td>
				<td>ELIMINAR</td>
				</tr>
			
							<?php
							require '../conexion.php';				
							$consultar="SELECT * FROM vendedor";
							$resultado=$conexion->query($consultar);
							while ($resultados=$resultado->fetch_assoc()){
								?>
							
									<tr align="center">
									<td ><?php echo$resultados['idvendedor'] ?></td>
									<td><?php echo$resultados['nombre_vendedor'] ?></td>
									<td><?php echo$resultados['cedula'] ?></td>
									<td><?php echo$resultados['direccion'] ?></td>
									<td><?php echo$resultados['telefono'] ?></td>
									<td><?php echo$resultados['email'] ?></td>
									
									
					<td><a href="modificar.php?idvendedor=<?php echo $resultados['idvendedor']; ?>">MODIFICAR</a></td>
					<td><a href="eliminar.php?idvendedor=<?php echo $resultados['idvendedor']; ?>">ELIMINAR</a></td>
					</tr>
							
					<?php }?>
					</tbody>	
					</table>
				</div>
						
				</form>


</body>
</html>

