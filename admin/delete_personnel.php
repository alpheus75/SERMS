<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM personnel WHERE Reg_No='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully deleted!");';
	echo 'window.location="personnel.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="personnel.php";';
	echo '</script>';
}
?>