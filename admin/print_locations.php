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
$pdf->Cell(100,10,'locations',1,0);

$query="SELECT * FROM markers WHERE name='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);

	
	
	$pdf->Cell(50,8,'name',1,0);
	$pdf->Cell(50,8,$row['name'],1,1);
	
	$pdf->Cell(50,8,'address',1,0);
	$pdf->Cell(50,8,$row['address'],1,1);
	
	$pdf->Cell(50,8,'lat',1,0);
	$pdf->Cell(50,8,$row['lat'],1,1);

	$pdf->Cell(50,8,'lng',1,0);
	$pdf->Cell(50,8,$row['lng'],1,1);
	
	$pdf->Cell(50,8,'type',1,0);
	$pdf->Cell(50,8,$row['type'],1,1);

}

$pdf->Output();
?>