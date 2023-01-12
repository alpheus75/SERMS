<?php
include("config.php");


$Reg_No    = $_POST['Reg_No'];
$FirstName = $_POST['FirstName'];
$LastName  = $_POST['LastName'];
$DOB       = $_POST['DOB'];
$Gender    = $_POST['Gender'];
$Phone     = $_POST['Phone'];
$Email     = $_POST['Email'];
$Residence = $_POST['Residence'];
$Course    = $_POST['Course'];
$Password  = $_POST['Password'];
$phashed    = password_hash($Password, PASSWORD_DEFAULT);

$query = "SELECT Reg_No FROM students WHERE Reg_No = '$Reg_No';";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
	echo '<script language="javascript">';
	echo 'alert("The Reg_No exist!");';
	echo 'window.location="registration_students.php";';
	echo '</script>';
}else{
	$query1 = "SELECT Phone FROM students WHERE Phone = '$Phone';";
    $result1 = $mysqli->query($query1);
    if ($result1->num_rows > 0) {
    	echo '<script language="javascript">';
	    echo 'alert("The phone number exist!");';
	    echo 'window.location="registration_students.php";';
	    echo '</script>';
    }else{
    	$query2 = "SELECT Email FROM students WHERE Email = '$Email';";
        $result2 = $mysqli->query($query2);
        if ($result2->num_rows > 0) {
        	echo '<script language="javascript">';
	        echo 'alert("The Email exist!");';
	        echo 'window.location="registration_students.php";';
	        echo '</script>';
        }else{
        	$sql = "INSERT INTO students(Reg_No, FirstName, LastName, DOB, Gender, Phone, Email, Residence, Course, Password) 
            VALUES('$Reg_No', '$FirstName', '$LastName', '$DOB', $Gender', '$Phone', '$Email', '$Residence', '$Course', '$phashed' )";
            if (mysqli_query($mysqli, $sql)) {
            	echo '<script language="javascript">';
	            echo 'alert("New student registered!");';
	            echo 'window.location="admin_home.php";';
	            echo '</script>';
            }else{
            	echo '<script language="javascript">';
	            echo 'alert("Duplicate student!");';
	            echo 'window.location="registration_students.php";';
	            echo '</script>';
            }
        }
    }
}

?>