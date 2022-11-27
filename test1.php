<?php
  $user = $_GET['user'];

  print "<html><body>\n";
  if ( $user == '3' ) print "<h1>Hello Anna</h1>\n";
  if ( $user == '4' ) print "<h1>Hello Beat</h1>\n";
 
  for ( $i = 1; $i < 100; $i++ ) print "i = $i<br>\n";
?>

<html>
<p><a href="index.php?user=3">Anna</a></p>
<p><a href="index.php?user=4">Beat</a></p>
</html>

<?php
  print "</body></html>\n";
?>
