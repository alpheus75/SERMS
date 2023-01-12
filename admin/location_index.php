
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
<h2>Add location markers</h2>
<hr/>
<form action="location_add.php" method="POST">
  <div class="container">
    <input type="text" placeholder="name" name="name" required>
    <input type="text" placeholder="address" name="address" required>
    <input type="text" placeholder="lat" name="lat" required>
    <input type="text" placeholder="lng" name="lng" required>
    <input type="text" placeholder="type" name="type" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Add</button>
	  <button type="reset" class="cancelbtn">Cancel</button>
    </div>
  </div>
</form>