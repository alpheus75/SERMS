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
$pdf->Cell(100,10,'STUDENTS PROFILE',1,0);

$query="SELECT * FROM students WHERE Reg_No='$id'";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(50,8,'No.',1,0);
	$pdf->Cell(50,8,$no,1,1);

	$pdf->Cell(50,8,'Reg_No',1,0);
	$pdf->Cell(50,8,$row['Reg_No'],1,1);
	
	$pdf->Cell(50,8,'FirstName',1,0);
	$pdf->Cell(50,8,$row['FirstName'],1,1);
	
	$pdf->Cell(50,8,'LastName',1,0);
	$pdf->Cell(50,8,$row['LastName'],1,1);
	
	$pdf->Cell(50,8,'DOB',1,0);
	$pdf->Cell(50,8,$row['DOB'],1,1);
	
	$pdf->Cell(50,8,'Gender',1,0);
	$pdf->Cell(50,8,$row['Gender'],1,1);
	
	$pdf->Cell(50,8,'Phone',1,0);
	$pdf->Cell(50,8,$row['Phone'],1,1);
	
	$pdf->Cell(50,8,'Email',1,0);
	$pdf->Cell(50,8,$row['Email'],1,1);

	$pdf->Cell(50,8,'Residence',1,0);
	$pdf->Cell(50,8,$row['Residence'],1,1);

	$pdf->Cell(50,8,'Course',1,0);
	$pdf->Cell(50,8,$row['Course'],1,1);
	
}

$pdf->Output();
?>