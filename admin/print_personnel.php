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
$pdf->Cell(100,10,'PERSONNEL PROFILE',1,0);

$query="SELECT * FROM personnel WHERE workID='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);

	$pdf->Cell(50,8,'workID',1,0);
	$pdf->Cell(50,8,$row['workID'],1,1);
	
	$pdf->Cell(50,8,'FirstName',1,0);
	$pdf->Cell(50,8,$row['FirstName'],1,1);
	
	$pdf->Cell(50,8,'LastName',1,0);
	$pdf->Cell(50,8,$row['LastName'],1,1);
	
	$pdf->Cell(50,8,'Gender',1,0);
	$pdf->Cell(50,8,$row['Gender'],1,1);

	$pdf->Cell(50,8,'Age',1,0);
	$pdf->Cell(50,8,$row['Age'],1,1);
	
	$pdf->Cell(50,8,'Phone',1,0);
	$pdf->Cell(50,8,$row['Phone'],1,1);

}

$pdf->Output();
?>