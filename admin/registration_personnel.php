
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="admin_home.php">Home</a>  
  <a href="personnel.php">Personnel</a>
  <a class="active" href="registration_personnel.php">Register</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Register new Personnel</h2>
<hr/>
<form action="register_personnel.php" method="POST">
  <div class="container">
    <input type="text" placeholder="workID" name="workID" required>
    <input type="text" placeholder="FirstName" name="FirstName" required>
    <input type="text" placeholder="LastName" name="LastName" required>
    <input type="text" placeholder="Gender" name="Gender" required>
    <input type="text" placeholder="Age" name="Age" required>
    <input type="text" placeholder="Phone" name="Phone" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Register</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>