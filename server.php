<?php
session_start();

/*variable*/
$username = "";
$email = "";
$pwd="";
$cpwd = "";
$errors = array();
 /*database connect*/
$db = mysqli_connect('localhost','root','','registration') or die("could not connect db");


/*registration user*/
if(isset($_POST['reg_user'])){
$username = mysqli_real_escape_string($db,$_POST['uname']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$pwd = mysqli_real_escape_string($db,$_POST['pwd']);
$cpwd = mysqli_real_escape_string($db,$_POST['cpwd']);
}

/* form validation*/
if (empty($username)) {array_push($errors,"Username is required");}
if (empty($email)) {array_push($errors,"Email is required");}
if (empty($pwd)) {array_push($errors,"Password is required");}
if ($pwd != $cpwd)  {array_push($errors,"Password doesn't match");}

/*check existing username

$user_check_query = "SELECT * From user Where uname = '$username' or email= '$email' LIMIT 1";
$result = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);

if($user['uname']=== $username){array_push($errors, "username is Already exist");}
if($user['email']=== $email){array_push($errors, "email is Already exist");}*/


/*if no error*/

if(count($errors)==0){
  $password = md5($pwd);  /*md5 version algorithm*/
  $query = "INSERT INTO  user (username, email ,password) VALUES ('$username','$email','$password')";/*setup query*/
    mysqli_query($db , $query );
   $_SESSION['uname'] = $username;
    $_SESSION['success'] ="you are now logged in";
  header("index.php");

}
/**/
/**/




 ?>
