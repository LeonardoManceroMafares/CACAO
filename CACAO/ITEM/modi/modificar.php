<?php
	session_start();
	include "conexion.php";
	?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administracion</title>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
 	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<script type="text/javascript" src="modificar.js"></script>
</head>



<body background="">
	<header>
	</header>
	<header>
	</header>
	<section>
		<nav class="menu2">
			<menu style="width: 110%">
				<li><a href="../RAZON/index.html" class="selected">COMERCIAL SALINAS</a></li>
				<li><a href="../RAZON/insertar.php" class="selected">RAZON SOCIAL</a></li></menu>
		</nav><br><br>
		
		<div align="center" ><h1  style="color:black;font-size:25px">MODIFICAR Y ELIMINAR COMPRAS</h1></div><br>
		<table class="estilo2" border="1"  align="center" style="font-family: fantasy; width: 100%;">
			<tr align="center" >
				<td width="400px" class="aceptar" >Id</td>
				<td width="900px" class="aceptar">idcate</td>
				<td width="900px" class="aceptar">idraz</td>
				<td width="500px" class="aceptar">idpro</td>
				<td width="500px" class="aceptar">nombcat</td>
				<td width="500px" class="aceptar">nombraz</td>
				<td width="300px" class="aceptar">nombprove</td>
				<td width="300px" class="aceptar">pvp</td>
				<td width="300px" class="aceptar">stock</td>
				<td width="300px" class="aceptar">eliminar</td>
				<td width="300px" class="aceptar">Modificar</td>
			</tr>
		<?php 
				
		
			$resultado=mysql_query("select iditem, b.idcategoria,c.idrazon,d.idproveedor,nombre_categoria,nombre_razon,nombre_proveedor,pvp,stock from items a,categoria b, razon c, proveedor d where b.idcategoria=a.idcategoria and c.idrazon=a.idrazon and d.idproveedor=a.idproveedor");
			while($row=mysql_fetch_array($resultado)){
				echo '
				<tr align="center">
					<td >
						<input type="hidden" value="'.$row[0].'">'.$row[0].'
						
					</td>
					<td ><input type="text" class="idcategoria" value="'.$row[1].'">
					</td>
					<td  ><input type="text" class="idrazon" value="'.$row[2].'">
					</td>
					<td ><input type="text"  class="idproveedor" value="'.$row[3].'">
					</td>
					<td ><input type="text"  class="nombre_categoria" value="'.$row[4].'">
					</td>
					<td ><input type="text"  name="nombre_razon" class="nombre_razon" value="'.$row[5].'">
					</td>
  					<td ><input type="text"  name="nombre_proveedor" class="nombre_proveedor" value="'.$row[6].'">
					</td>
					<td ><input type="text"  name="pvp" class="pvp" value="'.$row[7].'">
					</td>
					<td ><input type="text"  name="stock" class="stock" value="'.$row[8].'">
					</td>
					<td  ><button class="eliminar" data-id="'.$row[0].'">Eliminar</button>
					</td>
					<td  ><button class="modificar" data-id="'.$row[0].'">Modificar</button>
					</td>
				</tr>
				';
			}
		?>
	</table>
	<script type="text/javascript">
		function valor(){
		var cantidad= document.getElementById("cantidad").value; 
		var stock= document.getElementById("stock").value;
		var total1= (parseInt(stock)+ parseInt(cantidad))
		stock.value=total1;
}
		</script>
		</section>
</body>
</html>