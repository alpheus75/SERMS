<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$query = "DELETE FROM sos WHERE ID='$id'";
if(mysqli_query($mysqli, $query)){
    echo '<script language="javascript">';
	echo 'alert("SOS successfully deleted!");';
	echo 'window.location="sos.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="sos.php";';
	echo '</script>';
}
?>

