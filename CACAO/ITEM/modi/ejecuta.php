<?php 
	include "conexion.php";
	if($_POST['Caso']=="Eliminar"){
		mysql_query("delete from items where iditem=".$_POST['Id']);
		
		echo 'El producto se ha eliminado';
	}
	if($_POST['Caso']=="Modificar"){
		mysqli_query("update items set Id_catetogia='".$_POST['idcategoria']."' where iditem=".$_POST['Id']);
		mysqli_query("update items set Id_razon='".$_POST['idrazon']."' where iditem=".$_POST['Id']);
		mysqli_query("update items set Id_proveedor='".$_POST['idproveedor']."' where iditem=".$_POST['Id']);
		mysqli_query("update items set Pvp='".$_POST['Pvp']."' where iditem=".$_POST['Id']);
		mysqli_query("update items set Stock='".$_POST['Stock']."' where iditem=".$_POST['Id']);
		echo 'El producto se ha modificado';
	}

?>