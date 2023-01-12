<?php
$conn = mysqli_connect('localhost', 'root', '', 'sers');
if(!$conn){
	echo "Database connected". mysqli_connect_error();
}
?>
