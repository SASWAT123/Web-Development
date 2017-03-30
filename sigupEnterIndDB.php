<?php

session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }
      $_SESSION['counter'] += 1;
   }

include 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$regID = $_POST["regID"];


if($password === $c_password){
	$sql = "INSERT INTO user(name,email,password,regID) VALUES ('$name','$email','$password','$regID')";
	$conn->query($sql) or die("FATAL ERROR OCCURED");
	header("LOCATION:login.php");
}

?>