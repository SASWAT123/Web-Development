<?php
session_start();

include 'config.php';


$regID=$_POST["regID"];
$password = $_POST["password"];

$sql = "SELECT id,password from user where regID='$regID'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		if($row["password"] === $password)
		{
		   $_SESSION['counter'] = 1;
		    setcookie("regID", $regID, time()+3600, "/");
		    setcookie("predefregID",$regID, time()+3600, "/");

			header("LOCATION:index.php");
		}
		else
			header("LOCATION:login.php");
	}
}

?>