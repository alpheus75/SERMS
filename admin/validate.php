<?php
include("config.php");
session_start();

$Username = $_POST['Username'];
$Password = $_POST['Password'];
 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT * FROM admin_users WHERE Username = '$Username';";
$result = $mysqli->query($query);
echo $pwd;
if($result->num_rows > 0) 
{
	$query2 = "SELECT Password FROM admin_users WHERE Username = '$Username';";
	$result1 = $mysqli->query($query2);
	$result = mysqli_fetch_assoc($result1);
	$pwd = $result['Password'];
	if (password_verify($Password, $pwd))
	{
		$_SESSION['user'] = $username;
		header('location:admin_home.php');
	}else
	{
		header("location:login.php?message=Incorrect password!");
	}
	  
}
else{ 
	header("location:login.php?message=Incorrect username or password!");
}
?>