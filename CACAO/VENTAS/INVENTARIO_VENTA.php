<?php
require('../fpdf/fpdf.php');
	$server="localhost";
	$username="root";
	$password="";
	$db='cacao';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$pdf->Cell(18, 10, '', 0);
$pdf->Cell(125, 10, 'SISTEMA DE REPORTES', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(65, 8, '', 0);
$pdf->Cell(10, 8, 'COMERCIAL SALINAS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 10);

$pdf->Cell(35, 8, 'IDENTIFICADOR', 0);
$pdf->Cell(25, 8, 'ID ITEM', 0);
$pdf->Cell(40, 8, 'CLIENTE', 0);
$pdf->Cell(30, 8, 'VENDEDOR', 0);
$pdf->Cell(25, 8, 'FECHA', 0);
$pdf->Cell(25, 8, 'CANTIDAD', 0);
$pdf->Cell(25, 8, 'VALOR', 0);
$pdf->Cell(25, 8, 'TOTAL', 0);
$pdf->Cell(25, 8, 'CENCELADO', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("select idventa,b.idcliente,d.idvendedor,c.iditem,nombre_cliente,nombre_vendedor,fecha,a.cantidad,valor,total,cancelado,c.stock from venta a,cliente b,items c,vendedor d where b.idcliente=a.idcliente and c.iditem = a.iditem and d.idvendedor=a.idvendedor order by idventa asc");

while($productos2 = mysql_fetch_array($productos)){
	$pdf->Cell(15, 8, '', 0);
	$pdf->Cell(25, 8,$productos2['idventa'], 0);
	$pdf->Cell(20, 8,$productos2['iditem'], 0);
	$pdf->Cell(40, 8, $productos2['nombre_cliente'], 0);
	$pdf->Cell(30, 8, $productos2['nombre_vendedor'], 0);
	$pdf->Cell(30, 8, $productos2['fecha'], 0);
	$pdf->Cell(20, 8, $productos2['cantidad'], 0);
	$pdf->Cell(25, 8, $productos2['valor'], 0);
	$pdf->Cell(25, 8, $productos2['total'], 0);
	$pdf->Cell(25, 8, $productos2['cancelado'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
$pdf->Output();
?>