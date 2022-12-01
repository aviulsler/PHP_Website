<?php
  include 'head.php';
  if ( $nbrow == '1' ) {

//  Eigentlicher Inhalt der Webseite für angemeldete Benutzer
    print "Hallo $user<br>\n";
    print "<form name=\"logoff\" method=\"POST\" action=\"logoff.php\">\n";
    print "  <input type=\"submit\" value=\"logoff\">\n";
    print "</form>\n";









  }
  include 'tail.php';
?>
