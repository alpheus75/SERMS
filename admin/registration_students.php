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
  <a href="students.php">Students</a> 
  <a class="active" href="registration_students.php">Register</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Register new Student</h2>
<hr/>
<form action="register_students.php" method="POST">
  <div class="container">
    <input type="text" placeholder="Reg_No" name="Reg_No" required>
    <input type="text" placeholder="FirstName" name="FirstName" required>
    <input type="text" placeholder="LastName" name="LastName" required>
    <label><b>DOB</b>
      <input type="date" placeholder="DOB" name="DOB" required>
    </label>
    <select name="Gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="Other">Other</option>
    </select>
    <input type="text" placeholder="Phone" name="Phone" required>
    <input type="text" placeholder="Email" name="Email" required>
    <select name="Residence">
        <option value="Inside">Inside</option>
        <option value="Outside">Outside</option>
    </select>
    <input type="text" placeholder="Course" name="Course" required>
    <input type="password" placeholder="Password" name="Password" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Add Student</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>