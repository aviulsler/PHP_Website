<?php
  $cnx = new mysqli("localhost","aviulsler","Level600","LoginWebsite");

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
?> 
