<?php
include("config.php");
include("session.php");

$id     = $_POST['id'];
$Username  = $_POST['Username'];
$Passowrd  = $_POST['Passowrd'];

$query = "SELECT Username FROM admin_users WHERE Username = '$Username';";
$result = $mysqli->query($query);
if ($result->num_rows > 0) {
	echo '<script language="javascript">';
	echo 'alert("That admin already exits!");';
	echo 'window.location="update_admins.php";';
	echo '</script>';
}else{
    $sql = "UPDATE incidents SET Username='$Username', Passowrd='$Passowrd'
    WHERE Username='$id'";
    if(mysqli_query($mysqli, $sql)){
       echo '<script language="javascript">';
	   echo 'alert("Admin successfully updated!");';
	   echo 'window.location="incidents.php";';
	   echo '</script>';	
    }else{
	    echo '<script language="javascript">';
	    echo 'alert("Error Updating!");';
	    echo 'window.location="incidents.php";';
	    echo '</script>';
	}
}
?>