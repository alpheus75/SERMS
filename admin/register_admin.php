<?php
include("config.php");


$Username = $_POST['Username'];
$Password = $_POST['Password'];
$phashed    = password_hash($Password, PASSWORD_DEFAULT);

$query = "SELECT Username, Password FROM admin_users WHERE Username = '$Username' AND Password='$phashed';";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
	echo '<script language="javascript">';
	echo 'alert("That admin already exits!");';
	echo 'window.location="registration_admin.php";';
	echo '</script>';
}else{
    $sql = "INSERT INTO admin_users(Username, Password) 
    VALUES('$Username', '$phashed')";

    if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("New admin was added!");';
	echo 'window.location="admin_home.php";';
	echo '</script>';	
      } 
    }
?>