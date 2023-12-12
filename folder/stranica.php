<?php

    $dbh = mysqli_connect("localhost","root","","am");
    if($dbh->connect_error)
    {
        die("Niste se povezali". $dbh->connect_error);
    }
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    if (isset($_POST['izbor']) && !empty($_POST['izbor'])) {
        $izbor = $_POST['izbor'];
    }

    if (isset($_POST['izbor1']) && !empty($_POST['izbor1'])) {
        $izbor1 = $_POST['izbor1'];
    }

    if (isset($_POST['izbor2']) && !empty($_POST['izbor2'])) {
        $izbor2 = $_POST['izbor2'];
    }

    if(ctype_alpha($ime)) 
    {
        echo "Ime je ispravno(bez simbola,brojeva)" . "<br><br>";
    }
    else
    {
        echo "Ime nije ispravno!" . "<br><br>";;
    }

    if(ctype_alpha($prezime)) 
    {
        echo "Prezime je ispravno(bez simbola,brojeva)";
    }
    else
    {
        echo "Prezime nije ispravno!". "<br><br>";;
    }

    $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($filteredEmail !== false) {
        echo "Ukucan je ispravni email". "<br><br>";;
    } 
    else 
    {
        echo "Neispravan oblik email-a". "<br><br>";;
    }
?>