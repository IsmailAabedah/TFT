<?php
session_start();
 
include('connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$gender=$_POST['gender'];
 
 mysqli_query($bd, "INSERT INTO member(username, password, fname, lname, address, contact, email, gender)VALUES('$username', '$password', '$fname', '$lname', '$address', '$contact', '$email','$gender')");
 
 /*
mysqli_query($bd, "INSERT INTO member(fname, lname, gender, address, contact, picture, username, password , email)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password', 'email')");
 */
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>