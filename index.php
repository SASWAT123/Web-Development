<?php
session_start();
if(! isset( $_SESSION['counter'] ) ) {
  if (!($_SESSION['counter'] ==1)) {
    header("LOCATION:login.php");
  }

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>THE TRIP TRANCE</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>


<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">THE TRIP TRANCE</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="share.php">Share</a></li>
                    <li><a href="signout.php">Signout</a></li>
               </ul>
          </div>

  </div>
</div>

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div> 
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <h1>Welcome to The Trip Trance!</h1>
                    <h4>This is a website to bring zealous travellers together to share their views and experiences with each other and discover beyond limits..</h4>
                    <!--<a href="signup.php" class="smoothScroll btn btn-default">Signup/Signin</a>-->
               </div>

          </div>
     </div>
</section>
<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-post-thumb">
                         <div class="blog-post-title">
                              <h2>About us</h2>
                         </div>
                         <div class="blog-post-des">
                              <p>The Trip Trance is a trusted resource offering expert travel experiences for every stage of a traveler’s trip. We allow our users to share their experiences who know their destinations better than anyone else, allowing us to provide the best travel recommendations for all tastes and budget in over 7,500 worldwide destinations. Together, our website makes it possible for every trip to be a trip of a lifetime.</p>
                         </div>
                    </div>

          </div>
     </div>
</section>

<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Business Logic</h3>
                    <p>To bring various travellers together so that they can share their travel experiences.</p>
                    
               </div>

               <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <h3>Talk to us</h3>
                    <p><i class="fa fa-globe"></i>SRM University</p>
                    <p><i class="fa fa-phone"></i>+91-9999999999</p>
                    <p><i class="fa fa-save"></i>project@wst.com</p>
               </div>

               <div class="clearfix col-md-12 col-sm-12">
                    <hr>
               </div>
               
          </div>
     </div>
</footer>
</body>
</html>