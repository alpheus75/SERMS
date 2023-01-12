<?php
include("config.php");
include("session.php");

$id     = $_POST['id'];
$Reg_No  = $_POST['Reg_No'];
$FirstName  = $_POST['FirstName'];
$LastName   = $_POST['LastName'];
$DOB        = $_POST['DOB'];
$Gender     = $_POST['Gender'];
$Phone      = $_POST['Phone'];
$Email      = $_POST['Email'];
$Residence  = $_POST['Residence'];
$Course     = $_POST['Course'];
$Password   = $_POST['Password'];

$sql = "UPDATE students SET Reg_No='$Reg_No', FirstName='$FirstName', LastName='$LastName', DOB='$DOB', Gender='$Gender', Phone='$Phone', Email='$Email', Residence='$Residence', Course='$Course', Password='$Password'
WHERE Reg_No='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="students.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="students.php";';
	echo '</script>';
}
?>