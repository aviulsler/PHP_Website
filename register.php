<?php

  session_start();
  $idsession = session_id();

  $userRegister = $_POST['userRegister'];  
  $passwordRegister = $_POST['passwordRegister'];
  $passwordRepeat = $_POST['passwordRepeat'];

    if ( $passwordRegister != $passwordRepeat ) {
        echo "Passwords not matching";
    } else {
        $query = "INSERT INTO TLogin (user, password)
        VALUES ('$userRegister', '$passwordRegister')";

        include 'cnx.php';
        mysqli_query($cnx,$query);
        include 'cnx_reset.php';
        print "<h1>Erfolgreich Registiert</h1>\n";
        print "Welcome $userRegister<br>\n";
        print "<meta http-equiv=\"refresh\" content=\"5; url=.\">\n";
    }
?>
