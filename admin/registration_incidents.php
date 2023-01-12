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
  <a href="incidents.php">Incidents</a> 
  <a class="active" href="registration_incidents.php">Add</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Register new Incidents</h2>
<hr/>
<form action="register_incidents.php" method="POST">
  <div class="container">
    <select name="Type">
        <option value="harm">harm</option>
        <option value="theft">theft</option>
        <option value="mugging">mugging</option>
        <option value="Other">Other</option>
    </select>
    <input type="text" placeholder="Location" name="Location" required>
    <textarea  cols="100" rows="10" placeholder=" Incident Description" name="Description" required></textarea>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Add Incident</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>