<?php

include_once "config.php";

$Type        = $_POST['Type'];
$Location    = $_POST['Location'];
$Description = $_POST['Description'];

 
 //sending icident data to database

    $sql = "INSERT INTO incidents(Type, Location, Description) 
        VALUES('$Type', '$Location', '$Description')";
if (mysqli_query($conn, $sql)) {
    echo '<script language="javascript">';
	echo 'alert("New Incident registered!");';
	echo 'window.location="dashboard.php";';
	echo '</script>';
    }else{
        echo '<script language="javascript">';
	    echo 'alert("Error recording incident !");';
	    echo 'window.location="incident.php";';
	    echo '</script>';
    }
                

?>