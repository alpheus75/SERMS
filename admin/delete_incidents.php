<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM incidents WHERE Location='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Incident successfully deleted!");';
	echo 'window.location="incidents.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="incidents.php";';
	echo '</script>';
}
?>