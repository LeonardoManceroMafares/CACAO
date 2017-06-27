
<html>
<head>
<title>MODIFICAR COMPRAS</title>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">COMERCIAL SALINAS</a></li>
								<li><a href="../index.html"  class="selected">COMPRAS</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav><br><br><br><br><br><br>

<body background="../css/images/1.jpg">

		<div align="center">
			<h1  style="background: white; width: 50%;font-family: cursive; ">MODIFICAR INFORMACION</h1>
		</div>
		<?php
		$idcompra=$_REQUEST['idcompra'];
	
		require '../conexion.php';
				
										$consultar="select a.idcompra, b.iditem,c.idproveedor,nombre_proveedor,a.fecha,a.valor,a.cantidad,a.total,a.cancelado from compras a, items b,proveedor c where a.iditem=b.iditem and a.idproveedor=c.idproveedor and idcompra='$idcompra'";
										$resultado=$conexion->query($consultar);
										$resultados=$resultado->fetch_array();
										
								?>
			<div  style="width: 70%; padding-left: 17%; " >				
			<form action="modificar_compras.php?idcompra=<?php echo $resultados['idcompra']; ?>" method="post">
			              
			                 
			<br><br><br><br>
						<div align="center" style="background: #58ACFA;">
						<th><input style="visibility:hidden; font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="iditem" readonly value="<?php echo $resultados['iditem']; ?>"></th><br><br>
						<th><input style="visibility:hidden; font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="idproveedor" readonly value="<?php echo $resultados['idproveedor']; ?>"></th><br><br>				
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="NOMBRE PROVEEDOR" required="required" name="nombre_proveedor" value="<?php echo $resultados['nombre_proveedor']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="FECHA" required="required" name="fecha" value="<?php echo $resultados['fecha']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="CANTIDAD" required="required" name="cantidad" value="<?php echo $resultados['cantidad']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="VALOR" required="required" name="valor"  value="<?php echo $resultados['valor']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TOTAL" required="required" name="total" readonly value="<?php echo $resultados['total']; ?>"></th><br><br>	
						
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="cancelado" value="<?php echo $resultados['cancelado']; ?>"></th><br><br>	
												
						<input style="font-family: fantasy;font-size: 20px; background: #FF0040;color: black;" type="submit" required="required" name="enviar" value=ACEPTAR><br><br>
					</div>
			</form>
			</div>	
			
</body>
</html>