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
$pdf->Cell(0,10,'Personnel',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'workID',1);
$pdf->Cell(45,8,'FirstName',1);
$pdf->Cell(45,8,'LastName',1);
$pdf->Cell(45,8,'Gender',1);
$pdf->Cell(45,8,'Age',1);
$pdf->Cell(45,8,'Phone',1);

$query="SELECT * FROM personnel";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(45,8,$row['workID'],1);
	$pdf->Cell(45,8,$row['FirstName'],1);
	$pdf->Cell(45,8,$row['LastName'],1);
	$pdf->Cell(45,8,$row['Gender'],1);
	$pdf->Cell(45,8,$row['Age'],1);
	$pdf->Cell(45,8,$row['Phone'],1);

}
$pdf->Output();
?>