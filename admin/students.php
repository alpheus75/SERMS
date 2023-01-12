<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM students WHERE Reg_No LIKE '%".$valueToSearh."%' OR Phone LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM students";
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
  <a class="active" href="students.php">Students</a> 
  <a href="registration_students.php">Register</a>
  <a href="print_all_students.php" target="_blank">Print Students</a>
  <a href="logout.php">Logout</a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Students</h2>
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
<th>Reg_No.</th>
<th>FirstName</th>
<th>LastName</th>
<th>DOB</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>Residence</th>
<th>Course</th>
<th>Password</th>
<th>Update</th>
<th>Delete</th>
<th>Print</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Reg_No'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['DOB'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['Phone'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Residence'] . "</td>";
echo "<td>" . $row['Course'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td><a href='edit_students.php?id=".$row['Reg_No']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete_students.php?id=".$row['Reg_No']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='print_students.php?id=".$row['Reg_No']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 