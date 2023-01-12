<?php
include("config.php");
include("session.php");

$id     = $_POST['id'];
$workID    = $_POST['workID'];
$FirstName = $_POST['FirstName'];
$LastName  = $_POST['LastName'];
$Gender    = $_POST['Gender'];
$Age       = $_POST['Age'];
$Phone     = $_POST['Phone'];

$sql = "UPDATE personnel SET workID='$workID', FirstName='$FirstName', LastName='$LastName', Gender='$Gender', Age='$Age', Phone='$Phone' WHERE workID='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="personnel.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="personnel.php";';
	echo '</script>';
}
?>