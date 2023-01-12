<?php
include("config.php");
include("session.php");

$id     = $_POST['id'];
$name    = $_POST['name'];
$address = $_POST['address'];
$lat  = $_POST['lat'];
$lng    = $_POST['lng'];
$type       = $_POST['type'];

$sql = "UPDATE markers SET name='$name', address='$address', lat='$lat', lng='$lng', type='$type' WHERE name='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="locations.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="locations.php";';
	echo '</script>';
}
?>