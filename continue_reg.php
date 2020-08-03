<?php

include_once "connection.php";
$username = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['pwd'];

if (empty($username)) {array_push($errors,"Username is required");}
if (empty($email)) {array_push($errors,"Email is required");}
if (empty($pwd)) {array_push($errors,"Password is required");}
if ($pwd != $cpwd)  {array_push($errors,"Password doesn't match");}



//$password = md5($pwd);  /*md5 version algorithm*/
$query = "INSERT INTO  user (username, email ,password) VALUES ('$username','$email','$password')";/*setup query*/
mysqli_query($con , $query );
$_SESSION['uname'] = $username;
header("Location:login.php");

?>
