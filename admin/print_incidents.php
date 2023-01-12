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
$pdf->Cell(100,10,'Incidents',1,0);

$query="SELECT * FROM incidents WHERE Location='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);

	$pdf->Cell(50,8,'Type',1,0);
	$pdf->Cell(50,8,$row['Type'],1,1);
	
	$pdf->Cell(50,8,'Location',1,0);
	$pdf->Cell(50,8,$row['Location'],1,1);
	
	$pdf->Cell(50,8,'Description',1,0);
	$pdf->Cell(50,8,$row['Description'],1,1);
	
}

$pdf->Output();
?>