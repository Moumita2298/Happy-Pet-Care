<?php
session_start();
if (isset($_SESSION['uname'])){
  $_SESSION[msg]="you first login to visit the page";
  header("location: login.php");

}
if (isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");

}


 ?>
