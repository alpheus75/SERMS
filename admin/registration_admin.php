<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="admin_home.php">Home</a>
  <a href="admins.php">Admins</a>
  <a class="active" href="registration_admin.php">Add</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Register new admin</h2>
<hr/>
<form action="register_admin.php" method="POST">
  <div class="container">
    <input type="text" placeholder="Username" name="Username" required>
    <input type="password" placeholder="New Password" name="Password" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>