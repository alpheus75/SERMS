<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
</head>
<body>
  
<form action="validate.php" method="POST">

  <div class="imgcontainer">
    <img src="images/user.png" alt="User" class="user" width="200" height="200">
  </div>

  <div class="container">
    <p style="color: red;"><?php
    if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo $message;
    }
  ?></p>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
        
    <button type="submit" name="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="reset" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>