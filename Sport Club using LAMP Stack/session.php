<?php if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if (!isset($_SESSION['uid'])) {
    session_destroy();
  	$_SESSION['msg'] = "You must log in first";
    header('location: mylogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION);
  	header("location: mylogin.php");
  }

  ?>
