<?php
  include 'head.php';
  if ( $nbrow == '1' ) {

//  Eigentlicher Inhalt der Webseite für angemeldete Benutzer
    include '/../html/startPage.html';
    print "<form name=\"logoff\" method=\"POST\" action=\"logoff.php\">\n";
    print "  <input type=\"submit\" value=\"logoff\">\n";
    print "</form>\n";









  }
  include 'tail.php';
?>
