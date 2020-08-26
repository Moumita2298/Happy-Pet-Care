<?php 

 session_start();

$conn = mysqli_connect('localhost','root','','userregistration');


          
          $uname =  $_POST['uname'];
        $email =   $_POST['email'];
        $phone =  $_POST['phone'];
        $msg = $_POST['msg'];
        

$sql ="select * from usertable where uname = '$uname' AND email = '$email'  "; 
$result = mysqli_query($conn, $sql);
 

if(mysqli_num_rows($result)>0)
{
    $sql = "INSERT INTO contact ( uname, email, phone, msg) VALUES ('$uname','$email','$phone','$msg')";
    $result = mysqli_query($conn, $sql);
           if($result)
               {
	              header("Location: index.php");
               }

   
  
}
else
{
	echo "User not found. please login first";
}
    
?>