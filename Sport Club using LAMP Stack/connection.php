<?php

$servername = "localhost";
$user = "root";
$pass= "";
$db = "labexam";

$con = mysqli_connect($servername, $user, $pass,$db);
 if(!$con){
    die("Connection failed due to".mysqli_connect_error());
 }

?>
