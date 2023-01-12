<?php
include("config.php");


$workID    = $_POST['workID'];
$FirstName = $_POST['FirstName'];
$LastName  = $_POST['LastName'];
$Gender    = $_POST['Gender'];
$Age       = $_POST['Age'];
$Phone     = $_POST['Phone'];

$query = "SELECT workID FROM personnel WHERE workID = '$workID';";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
	echo '<script language="javascript">';
	echo 'alert("The workID exist!");';
	echo 'window.location="registration_personnel.php";';
	echo '</script>';
}else{
	$query1 = "SELECT Phone FROM personnel WHERE Phone = '$Phone';";
    $result1 = $mysqli->query($query1);
    if ($result1->num_rows > 0) {
    	echo '<script language="javascript">';
	    echo 'alert("The phone number exist!");';
	    echo 'window.location="registration_personnel.php";';
	    echo '</script>';
    }else{
    	$sql = "INSERT INTO personnel(workID, FirstName, LastName, Gender, Age, Phone) 
        VALUES('$workID', '$FirstName', '$LastName', '$Gender', '$Age', '$Phone' )";
        if (mysqli_query($mysqli, $sql)) {
        	echo '<script language="javascript">';
	        echo 'alert("New personnel registered!");';
	        echo 'window.location="admin_home.php";';
	        echo '</script>';
        }else{
        	echo '<script language="javascript">';
	        echo 'alert("Duplicate personnel!");';
	        echo 'window.location="registration_personnel.php";';
	        echo '</script>';
        }
    }
}
?>