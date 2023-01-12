<?php
session_start();
include_once "config.php";

$Reg_No     = $_POST['Reg_No'];
$Password   = $_POST['Password'];
 
 //sending data to database
$sql = mysqli_query($conn, "SELECT * FROM students WHERE Reg_No = '{$Reg_No}'"); //AND Password = '{$phashed}'");
if (mysqli_num_rows($sql) > 0) {
	$sql1 = mysqli_query($conn, "SELECT Password FROM students WHERE Reg_No = '{$Reg_No}'");
	$result = mysqli_fetch_assoc($sql1);
	$phashed = $result['Password'];
	//echo $phashed;
	//$verify = password_verify($Password, $phashed);
	if (password_verify($Password, $phashed)) {
		$_SESSION['user'] = $Reg_No;
    	header("location:dashboard.php");
	}else{
		echo '<script language="javascript">';
	    echo 'alert("Incorrect password!");';
	    echo 'window.location="login.php";';
	    echo '</script>';
	}
}else{            
    echo '<script language="javascript">';
    echo 'alert("The registration number does not exist");';
    echo 'window.location="login.php";';
    echo '</script>';
}

?>