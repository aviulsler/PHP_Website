<?php
    $userRegister = $_POST['userRegister'];  
    $passwordRegister = $_POST['passwordRegister'];
    $passwordRepeat = $_POST['passwordRepeat'];

    if ( $passwordRegister != $passwordRepeat ) {
        print "<h1>Passwords not identical</h1>\n";
        print "<meta http-equiv=\"refresh\" content=\"5; url=html/register_page.html\">\n";
    } else {
        $query = "INSERT INTO TLogin (user, password)
        VALUES ('$userRegister', '$passwordRegister')";

        include 'cnx.php';
        mysqli_query($cnx,$query);
        include 'cnx_reset.php';
        print "<h1>Erfolgreich Registiert</h1>\n";
        print "Welcome $userRegister<br>\n";
        print "<meta http-equiv=\"refresh\" content=\"5; url=../index.php\">\n";
    }
?>
