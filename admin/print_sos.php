<?php
require('fpdf/fpdf.php');
include('config.php');
$id = $_GET['id'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,'SOS',1,0);

$query="SELECT * FROM sos WHERE ID='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);

	$pdf->Cell(50,8,'ID',1,0);
	$pdf->Cell(50,8,$row['ID'],1,1);
	
	$pdf->Cell(50,8,'sender',1,0);
	$pdf->Cell(50,8,$row['sender'],1,1);

	$pdf->Cell(50,8,'time',1,0);
	$pdf->Cell(50,8,$row['time'],1,1);
	
	$pdf->Cell(50,8,'longitude',1,0);
	$pdf->Cell(50,8,$row['longitude'],1,1);

	$pdf->Cell(50,8,'latitude',1,0);
	$pdf->Cell(50,8,$row['latitude'],1,1);
	
}

$pdf->Output();
?>