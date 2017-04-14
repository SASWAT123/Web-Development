<?php

session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }
      $_SESSION['counter'] += 1;
   }
include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style type="text/css">
	input{
		border: 3px solid #ccc;
	}
	h3{
		color: white;
	}
</style>
<body style="background:url('img.jpg');">

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<center><h3>Sign Up</h3></center>
			<br>
			<div class="panel panel-default">
			  <div class="panel-body">
			  <br>
			  <script>  
					function validateform(){  
					var name=document.myform.name.value;  
					var password=document.myform.password.value;
					var x=document.myform.email.value;  
					var atposition=x.indexOf("@");  
					var dotposition=x.lastIndexOf(".");    
  
					if (name==null || name==""){  
  					alert("Name can't be blank");  
  					return false;  
						}else if(password.length<6){  
  						alert("Password must be at least 6 characters long.");  
  							return false;  
  							}else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length) {
  								alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  									return false;  
  							} 
						}  
				</script>  
				<body>  
			  <form  name="myform" method="POST" action="sigupEnterIndDB.php" onsubmit="return validateform()">
			  <span>REG ID</span>
			  <input type="text" name="regID" class="form-control">
			    <span>Email</span>

			    <input type="text" name="email" class="form-control">
			    <br>

			    <span>Name</span>

			    <input type="text" name="name" class="form-control">
			    <br>


			    <span>Password</span>

			    <input type="password" name="password" class="form-control">
			    <br>
			    <span>Confirm Password</span>

			    <input type="password" name="c_password" class="form-control">
			    <br>
			    <br>
			    <input type="submit" name="submit" class="btn btn-primary btn-block">
			    </form>
			  </div>
			</div>

			<br>
			<div class="panel panel-default">
				<div class="panel-body">
					<a class="btn" href="login.php">Sign In</a>
				</div>

			</div>

		</div>
	</div>

</div>


</body>
</html>