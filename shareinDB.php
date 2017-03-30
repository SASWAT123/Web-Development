<?php

session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }
      $_SESSION['counter'] += 1;
   }

include 'config2.php';

$name = $_POST["name"];
$subject = $_POST["subject"];
$Details = $_POST["Details"];


	$sql = "INSERT INTO share(name,subject,Details) VALUES ('$name','$subject','$Details')";
	$conn->query($sql) or die("FATAL ERROR OCCURED");
	header("LOCATION:gallery.php")
?>