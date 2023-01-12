<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM admin_users WHERE Username LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM admin_users";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
  <a class="active" href="admins.php">Admins</a> 
  <a href="registration_admin.php">Add</a>
  <a href="print_all_admins.php" target="_blank">Print Admins</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Admins</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Search">
<button type="submit" class="signupbtn" name="search" >Search</button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>Username.</th>
<th>Password</th>
<th>Update</th>
<th>Delete</th>
<th>Print</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td><a href='edit_admins.php?id=".$row['Username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete_admins.php?id=".$row['Username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='print_admins.php?id=".$row['Username']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 