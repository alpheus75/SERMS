<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM admins WHERE Username='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Admin successfully removed!");';
	echo 'window.location="admins.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error removing!");';
	echo 'window.location="admins.php";';
	echo '</script>';
}
?>