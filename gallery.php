<?php

session_start();
include 'config.php';
if (isset($_COOKIE["regID"])) {
  $regID = $_COOKIE["regID"];
  $sql = "SELECT name from user where regID='$regID'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row['name'];
    }
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

<title>The Trip Trance</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
<style>
     hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
</style>
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
               <a href="index.php" class="navbar-brand">The Trip Trance </a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="gallery.php">Gallery</a></li>
                   <li><a href="share.php">Share</a></li>
                   <li><a href="signout.php">Signout</a></li>
                   <li><a href="#"> <?php echo $name; ?> </a></li>
               </ul>
          </div>

  </div>
</div>


<section id="home" class="main-gallery parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
               </div>

          </div>
     </div>
</section>

<!-- Gallery Section -->

<section id="gallery">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h2>Come share your travel experiences with everyone.</h2>

                      <iframe width="854" height="480" src="https://www.youtube.com/embed/8Ulrn4D3M_Y" frameborder="0" allowfullscreen></iframe>
                      <p><br>Travel recreational video.</p>

                      <p><br>Data Being fetched from the database.</p>
                    
                    <?php

                         include 'config2.php';
                       
                       $sql = "SELECT * FROM share";
                         $result = $conn->query($sql);

                                   if ($result->num_rows > 0) {
                                    // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                   echo "<table><tr><br><td><b>Name :&nbsp &nbsp </b></td><td>" . $row["name"]. "</td></tr><br><tr><td><b>Place :&nbsp &nbsp </b></td><td>" . $row["subject"]. "</td></tr><br><tr><td><b>Experience :&nbsp &nbsp </b></td><td>" . $row["Details"]. "</td><tr><br></table><hr>";
                                   }
                                        } else {
                                             echo "0 results";
                                             }

                                             ?>


                    <div class="col-md-12 col-sm-12">
                         <p>Come join us and share so that others can also enjoy.</p>
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
                    <div class="footer-copyright">
                    </div>
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