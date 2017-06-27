

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
								<li><a href="../index.html"  class="selected">VENTAS</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav>
				
    <body background="../css/images/1.jpg">
    <div align="center" style="padding-top: 10%;color: black; font-family: monospace; ">
    <form  action="insertar_2.php"  method = "post" enctype="multipart/form-data" style="background-color: #81F79F;width: 50%" >
										
						<fieldset style=" font-size: 25px;width: 70%;">
							CLIENTE:<br>
							<select id="idcliente" class="" name="idcliente" style="width: 80%;height: 4%" required>
							<option value="">*************************************</option>					
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										
										
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT * FROM cliente";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['idcliente']?>"><?php echo $row['nombre_cliente'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>	
						<fieldset style=" font-size: 25px;width: 70%;">
							VENDEDOR:<br>
							<select id="idvendedor" class="" name="idvendedor" style="width: 80%;height: 4%" required>
							<option value="">*************************************</option>								
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT * FROM vendedor";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['idvendedor']?>"><?php echo $row['nombre_vendedor'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>	
						
						<fieldset style=" font-size: 25px;width: 70%;">
						
							IDITEMS
							
							<select id="iditem" class="" name="iditem" style="width: 80%;height: 4%;"  >
								<option value="">*************************************</option>
								<?php
										mysql_connect("localhost","root","") or die ("NO SE LOGRO LA CONEXION");
										mysql_select_db("cacao") or die ("NO SE LOGRO LA CONEXION con BD");
										
										$mat=$_REQUEST['mat'];
										
										
										$query="SELECT a.iditem,b.idcategoria,nombre_categoria from items a,categoria b where b.idcategoria=a.idcategoria";
										$resultado=mysql_query($query);
										?>
										<?php 
										while ($row=mysql_fetch_array($resultado)){?>
											<option value="<?php echo $row['iditem']?>"><?php echo $row['nombre_categoria'] ?></option>
								<?php }?>
										
						</select>
						</fieldset>
						
					<fieldset style=" font-size: 25px;width: 70%;" >
					FECHA<br>
					<input  type="date" name="fecha" required >
					</fieldset>
										
					<fieldset style=" font-size: 25px;width: 70%;" >
						CANTIDAD<br>
					<input  type="number" name="cantidad" required>
					</fieldset>
					<fieldset style=" font-size: 25px;width: 70%;" >
						VALOR<br>
					<input  type="text" name="valor" required>
					</fieldset>
					
					<fieldset style=" font-size: 25px" required >
						CANCELADO<br>
					<select id="cancelado" class="cancelado" name="cancelado" style="width: 59%;height: 5%">
					<option>CANCELADO</option>
					<option>SIN CANCELAR</option>
					</select>
					</fieldset>
					
					<input type="submit" name="accion" value="Enviar" class="aceptar"><br><br><br>
					
	</form><br><br>
    </div>
    <?php

	?>
	
    </body>
  
</html>