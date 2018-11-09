<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
session_start();
 
include('connection.php');
 
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];
 
mysqli_query($bd, "INSERT INTO moderators(username, password, fullname, contact, email)VALUES('$username', '$password', '$fullname', '$contact', '$email')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>


<body>
</body>
</html>