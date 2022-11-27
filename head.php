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

print "<html>\n";
print "  <head>\n";
print "    <title>Hello</title>\n";
print "  </head>\n";
print "  <body bgcolor=\"#CCFFFF\">\n";
print "  </body>\n";

if ( $nbrow == '1' ) {
  print "<form name=\"logoff\" method=\"POST\" action=\"logoff.php\">\n";
  print "  <input type=\"submit\" value=\"logoff\">\n";
  print "</form>\n";
}

?>
