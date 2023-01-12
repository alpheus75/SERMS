<?php
session_start();
include_once "config.php";
include "session.php";
$Reg_No     = $_POST['Reg_No'];
$FirstName  = $_POST['FirstName'];
$LastName   = $_POST['LastName'];
$DOB        = $_POST['DOB'];
$Gender     = $_POST['Gender'];
$Phone      = $_POST['Phone'];
$Email      = $_POST['Email'];
$Residence  = $_POST['Residence'];
$Course     = $_POST['Course'];
$Password   = $_POST['Password'];
$phashed    = password_hash($Password, PASSWORD_DEFAULT);
 
 //sending data to database
$sql = mysqli_query($conn, "SELECT Phone FROM students WHERE Phone = '{$Phone}'");
if (mysqli_num_rows($sql) > 0) {
    echo '<script language="javascript">';
    echo 'alert("Phone number already exists!");';
    echo 'window.location="login.php";';
    echo '</script>';
    }else{
        $sql1 = mysqli_query($conn, "SELECT Email FROM students WHERE Email = '{$Email}'");
            if (mysqli_num_rows($sql1) > 0) {
                echo '<script language="javascript">';
                echo 'alert("The email already exists!");';
                echo 'window.location="login.php";';
                echo '</script>';
        }else{
            $sql2 = mysqli_query($conn, "SELECT Reg_No FROM students WHERE Reg_No = '{$Reg_No}'");
               if (mysqli_num_rows($sql2) > 0) {
                   echo '<script language="javascript">';
                   echo 'alert("Registration number already exists!");';
                   echo 'window.location="login.php";';
                   echo '</script>';
            }else{
                $sql3 = "INSERT INTO students(Reg_No, FirstName, LastName, DOB, Gender, Phone, Email, Residence, Course, Password) 
                VALUES('$Reg_No', '$FirstName', '$LastName', '$DOB', '$Gender', '$Phone', '$Email', '$Residence', '$Course', '$phashed')";
                if (mysqli_query($conn, $sql3)) {
                    echo '<script language="javascript">';
                    echo 'alert("Registration successful!");';
                    echo 'window.location="dashboard.php";';
                    echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("Error registering !");';
                echo 'window.location="register.php";';
                echo '</script>';
            }
        }
    }
}

?>