<?php

session_start();
$idsession = session_id();

$query = "SELECT user FROM TSession WHERE idsession = '$idsession';";
include 'cnx.php';
$result = mysqli_query($cnx,$query);
include 'cnx_reset.php';

$nbrow = 0;
while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {
  $nbrow++;
  $user = $row['user'];
}

?>
