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
$pdf->Cell(0,10,'Students',1,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,8,'No.',1);
$pdf->Cell(45,8,'Reg_No',1);
$pdf->Cell(45,8,'FirstName',1);
$pdf->Cell(45,8,'LastName',1);
$pdf->Cell(45,8,'DOB',1);
$pdf->Cell(45,8,'Gender',1);
$pdf->Cell(45,8,'Phone',1);
$pdf->Cell(45,8,'Email',1);
$pdf->Cell(45,8,'Residence',1);
$pdf->Cell(45,8,'Course',1);

$query="SELECT * FROM students";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(10,8,$no,1);
	$pdf->Cell(45,8,$row['Reg_No'],1);
	$pdf->Cell(45,8,$row['FirstName'],1);
	$pdf->Cell(45,8,$row['LastName'],1);
	$pdf->Cell(45,8,$row['DOB'],1);
	$pdf->Cell(45,8,$row['Gender'],1);
	$pdf->Cell(45,8,$row['Phone'],1);
	$pdf->Cell(45,8,$row['Email'],1);
	$pdf->Cell(45,8,$row['Residence'],1);
	$pdf->Cell(45,8,$row['Course'],1);

}
$pdf->Output();
?>