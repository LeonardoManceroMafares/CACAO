
<html>
<head>
<title>MODIFICAR VENTAS</title>
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
				<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">COMERCIAL SALINAS</a></li>
								<li><a href="../index.html"  class="selected">VENTAS</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav><br><br><br><br><br><br>

<body background="../css/images/1.jpg">

		<div align="center">
			<h1  style="background: white; width: 50%;font-family: cursive; ">MODIFICAR INFORMACION</h1>
		</div>
		<?php
		$idventa=$_REQUEST['idventa'];
		require '../conexion.php';
				
										$consultar="SELECT idventa,d.idvendedor,c.iditem,b.idcliente,nombre_cliente,nombre_vendedor,fecha,a.cantidad,valor,total,cancelado,c.stock FROM venta a,cliente b,items c,vendedor d WHERE a.iditem=c.iditem and idventa='$idventa' ";
										$resultado=$conexion->query($consultar);
										$resultados=$resultado->fetch_array();
										
								?>
			<div  style="width: 70%; padding-left: 17%; " >				
			<form action="modificar_venta.php?idventa=<?php echo $resultados['idventa']; ?>" method="post">
			              
			                 
			<br><br><br><br>
						
						<div align="center" style="background: #58ACFA;">
						<th><input style="visibility:hidden; font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="idvendedor" readonly value="<?php echo $resultados['idvendedor']; ?>"></th>
						<th><input style="visibility:hidden; font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="iditem" readonly value="<?php echo $resultados['iditem']; ?>"></th>
						<th><input style="visibility:hidden; font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="idcliente" readonly value="<?php echo $resultados['idcliente']; ?>">				
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="nombre_cliente" value="<?php echo $resultados['nombre_cliente']; ?>"></th><br><br>					
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="nombre_vendedor" value="<?php echo $resultados['nombre_vendedor']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="fecha" value="<?php echo $resultados['fecha']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="cantidad" value="<?php echo $resultados['cantidad']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="valor"  value="<?php echo $resultados['valor']; ?>"></th><br><br>	
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="total" readonly value="<?php echo $resultados['total']; ?>"></th><br><br>	
						
						<th><input style="font-family: fantasy;font-size: 20px" type="text" placeholder="TEXTO" required="required" name="cancelado" value="<?php echo $resultados['cancelado']; ?>"></th><br><br>	
												
						<input style="font-family: fantasy;font-size: 20px; background: #FF0040;color: black;" type="submit" required="required" name="enviar" value=ACEPTAR><br><br>
					</div>
			</form>
			</div>	
			
</body>
</html>