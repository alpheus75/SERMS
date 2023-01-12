<?php
require('fpdf/fpdf.php');
include('config.php');

$pdf = new FPDF();
var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'SOS',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'ID',1);
$pdf->Cell(45,8,'sender',1);
$pdf->Cell(45,8,'time',1);
$pdf->Cell(45,8,'longitude',1);
$pdf->Cell(45,8,'latitude',1);

$query="SELECT * FROM sos";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(45,8,$row['ID'],1);
	$pdf->Cell(45,8,$row['sender'],1);
	$pdf->Cell(45,8,$row['time'],1);
	$pdf->Cell(45,8,$row['longitude'],1);
	$pdf->Cell(45,8,$row['latitude'],1);

}
$pdf->Output();
?>