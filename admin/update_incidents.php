<?php
include("config.php");
include("session.php");

$id     = $_POST['id'];
$Type  = $_POST['Type'];
$Location  = $_POST['Location'];
$Description   = $_POST['Description'];

$sql = "UPDATE incidents SET Type='$Type', Location='$Location', Description='$Description'
WHERE Type='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Incident successfully updated!");';
	echo 'window.location="incidents.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="incidents.php";';
	echo '</script>';
}
?>