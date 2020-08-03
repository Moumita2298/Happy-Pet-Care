<?php
$db= mysqli_connect("localhost","root","","registration");
if(!$db){
  echo "connection failed";
}

$username=$email=$password1=$password2="";
$username = $_POST['uname'];
$email = $_POST['email'];
$password1 = $_POST['pwd'];
$password2 = MD5(password1);

$query = "INSERT INTO  user (username, email ,password) VALUES ('$username','$email','$password')";/*setup query*/
$result=  mysqli_query($db,$query );
if ($result) {
  header("location : login.php");

}
else{
  echo " error:" .$query;
}
 ?>
