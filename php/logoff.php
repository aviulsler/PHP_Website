<?php
  include 'head.php';

  $query = "DELETE FROM TSession WHERE idsession = '$idsession';";
  include 'cnx.php';
    mysqli_query($cnx,$query);
  include 'cnx_reset.php';

  print "<h1>Sie wurden erfolgreich abgemeldet</h1>\n";
  print "<meta http-equiv=\"refresh\" content=\"5; url=../index.html\">\n";

  include 'tail.php';
?>
