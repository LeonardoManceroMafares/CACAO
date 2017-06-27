

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
<title>INSERTAR INFORMACION</title>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/redandblack.css">

<title>ITEMS</title>
</head>

			<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">ITEMS</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav>
				
    <body background="../css/images/1.jpg">
    <div align="center" style="padding-top: 10%;color: white; font-family: monospace; ">
    <form  action="insertar_2.php"  method = "post" enctype="multipart/form-data" style="background-color: #FE9A2E;width: 50%" >
					<fieldset style=" font-size: 25px;width: 70%;">
							NOMBRE RAZON SOCIAL:<br>
							<select id="idrazon" class="" name="idrazon" style="width: 80%;height: 4%" required>
							<option value="" >*************************************</option>
								
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT * FROM razon";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['idrazon']?>"><?php echo $row['nombre_razon'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>
						
						<fieldset style=" font-size: 25px;width: 70%;">
							PROVEEDOR:<br>
							<select id="idproveedor" class="" name="idproveedor" style="width: 80%;height: 4%" required>
							<option value="">*************************************</option>
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT * FROM proveedor";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['idproveedor']?>"><?php echo $row['nombre_proveedor'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>
						
						
						<fieldset style=" font-size: 25px;width: 70%;">
							CATEGORIA:<br>
							<select id="idcategoria" class="" name="idcategoria" style="width: 80%;height: 4%" required>
							<option value="">*************************************</option>
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT * FROM categoria";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['idcategoria']?>"><?php echo $row['nombre_categoria'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>
						
						
					<fieldset style=" font-size: 25px;width: 70%;" >
						PVP<br>
					<input  type="text" name="pvp" required>
					</fieldset>
					<fieldset style=" font-size: 25px;width: 70%;" >
						CANTIDAD<br>
					<input  type="text" name="cantidad" required>
					</fieldset>
					<input type="submit" name="accion" value="Enviar" class="aceptar"><br><br><br>
	</form><br><br>
    </div>
    <?php

	?>
	
    </body>
  
</html>