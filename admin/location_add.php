<?php
include("config.php");


$name    = $_POST['name'];
$address = $_POST['address'];
$lat     = $_POST['lat'];
$lng     = $_POST['lng'];
$type    = $_POST['type'];

$query = "SELECT lat, lng FROM markers WHERE lat = '$lat' AND  lng = '$lng';";
$result = $mysqli->query($query);
if ($result->num_rows > 0){
	echo '<script language="javascript">';
	echo 'alert("That location already exist!");';
	echo 'window.location="location_index.php";';
	echo '</script>';
} else{
	$sql = "INSERT INTO markers(name, address, lat, lng, type) 
            VALUES('$name', '$address', '$lat', '$lng', '$type' )";
    if (mysqli_query($mysqli, $sql)) {
        	echo '<script language="javascript">';
	        echo 'alert("New marker added successfully!");';
	        echo 'window.location="locations.php";';
	        echo '</script>';
        }else{
        	echo '<script language="javascript">';
	        echo 'alert("Duplicate marker!");';
	        echo 'window.location="location_index.php";';
	        echo '</script>';
        }
}
        

?>