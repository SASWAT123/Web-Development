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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Share your travel experiences</title>
  <link rel="stylesheet" href="css/Share.css">
  
</head>
<body>

<img src="san-francisco-panoramic.jpg" width="1350" height="300">

  <form method="POST" action="shareinDB.php">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder="Your Name…" autofocus>
      </p>

      <p class="contact-input">
        <input type="text" name="subject" placeholder="Name of the place..." autofocus>
      </p>

      <p class="contact-input">
        <textarea name="Details" placeholder="Your text…"></textarea>
      </p>

      <p class="contact-submit">
        <input type="submit" value="Send Details">
      </p>
    </fieldset>
  </form>

</body>
</html>
