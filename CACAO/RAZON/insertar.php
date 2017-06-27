

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<link rel="stylesheet" type="text/css" href="../css/css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/css/mediagroove.css">
<link rel="stylesheet" type="text/css" href="../css/css/rendandblack.css">

<title>RAZON SOCIAL</title>
</head>

			<nav class="menu2">
							<menu style="padding-top: 1%">
								<li><a href="../index.html"  class="selected">RAZON SOCIAL</a></li>
								<li><a href="insertar.php" class="selected" >INSERTAR INFORMACION</a></li>
								<li><a href="consultar.php" class="selected">CONSULTAR INFORMACION</a></li>
								
							</menu>
				</nav>
				
    <body background="../css/images/1.jpg">
    <div align="center" style="padding-top: 10%;color: white; font-family: monospace; ">
    <form  action="insertar_2.php"  method = "post" enctype="multipart/form-data" >
					<fieldset style=" font-size: 25px;background-color: #585858;width: 70%;" >
						NOMBRE<br>
						
						<input  type="text" name="nombre_razon">
					</fieldset>
					
					<fieldset style=" font-size: 25px;background-color: #585858;width: 70%;">
						DIRECCION<br>
						<input type="text" name="direccion" >
					</fieldset>
					<fieldset style=" font-size: 25px;background-color: #585858;width: 70%;">
						TELEFONO<br>
						<input type="text" name="telefono" >
					</fieldset>
					<fieldset style=" font-size: 25px;background-color: #585858;width: 70%;">
						EMAIL<br>
						<input type="text" name="email" >
					</fieldset>
					<fieldset style=" font-size: 25px;background-color: #585858;width: 70%;">
						RUC<br>
						<input type="text" name="ruc" >
					</fieldset><br><br>
					
					<input type="submit" name="accion" value="Enviar" class="aceptar"><br><br><br>
	</form><br><br>
    </div>
    <?php

	?>
	
    </body>
  
</html>