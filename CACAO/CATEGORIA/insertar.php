<?php
require '../conexion.php';				
$consultar="SELECT * FROM categoria";
$resultado=$conexion->query($consultar);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
<title>INSERTAR INFORMACION</title>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/rendandblack.css">

<title>CATEGORIA</title>
</head>

			<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">CATEGORIA</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav>
				
    <body background="../css/images/1.jpg">
    <div align="center" style="padding-top: 10%;color: white; font-family: monospace; ">
    <form  action="insertar_2.php"  method = "post" enctype="multipart/form-data" style="background-color: #FE9A2E;width: 50%" >
					<fieldset style=" font-size: 25px;width: 70%;" >
						NOMBRE DE CATEGORIA<br>
					<input  type="text" name="nombre_categoria">
					</fieldset>
					<input type="submit" name="accion" value="Enviar" class="aceptar"><br><br><br>
	</form><br><br>
    </div>
    <?php

	?>
	
    </body>
  
</html>