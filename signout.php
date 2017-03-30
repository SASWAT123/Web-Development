<?php
session_start ();
unset ($_SESSION [ 'counter']);
session_destroy();
setcookie( "regID", "267", time()- 60, "/");

header ( "LOCATION: login.php");
?>