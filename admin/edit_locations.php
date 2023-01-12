<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="students.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Update locations</h2>
<hr/>

<form action="update_locations.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM markers WHERE name ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['name']}' required>";
    echo"<input type='text' placeholder='name' name='name' value='{$row['name']}' required>";
    echo"<input type='text' placeholder='address' name='address' value='{$row['address']}' required>";
    echo"<input type='text' placeholder='lat' name='lat' value='{$row['lat']}' required>";
    echo"<input type='text' placeholder='lng' name='lng' value='{$row['lng']}' required>";
    echo"<input type='text' placeholder='type' name='type' value='{$row['type']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
	echo"</div>";
	}?>
  </div>
</form>