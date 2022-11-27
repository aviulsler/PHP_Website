<?php

  session_start();
  $idsession = session_id();

  $userform = $_POST['user'];  
  $passwordform = $_POST['password'];  

  // verbinde mit Datenbank
  include 'cnx.php';

  // Was will ich meine Datenbank fragen mit SQL?
  $query = "SELECT password FROM TLogin WHERE user = '$userform';";

  // Datenbankabfrage starten
  $result = mysqli_query($cnx,$query); 

  // Das Resultat aus dem Antwortarray herauslesen und in die Variable $passworddb speichern
  while ( $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ) {
    $passworddb = $row['password'];
  }

  // schliesse Datenbankverbindung
  include 'cnx_reset.php';

  if ( $passwordform == $passworddb ) {
    print "<meta http-equiv=\"refresh\" content=\"0; url=hallo.php\">\n";

    include 'cnx.php';
      mysqli_query($cnx,"INSERT INTO TSession ( idsession, user ) VALUES ( '$idsession', '$userform' );"); 
    include 'cnx_reset.php';

  } else {
    print "<h1>Login fehlerhaft</h1>\n";
    print "<meta http-equiv=\"refresh\" content=\"5; url=.\">\n";
  }
?>
