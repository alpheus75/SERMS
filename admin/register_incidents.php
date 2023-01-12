<?php
include("config.php");
include("session.php")


$Type        = $_POST['Type'];
$Location    = $_POST['Location'];
$Description = $_POST['Description'];
$Reporter    = $_SESSION['user'];

$sql = "INSERT INTO incidents(Type, Location, Description, Reporter) 
        VALUES('$Type', '$Location', '$Description', $Reporter)";
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
	echo 'alert("New Incident registered!");';
	echo 'window.location="admin_home.php";';
	echo '</script>';
    }else{
        echo '<script language="javascript">';
	    echo 'alert("Error recording incidents!");';
	    echo 'window.location="registration_incidents.php";';
	    echo '</script>';
    }

?>