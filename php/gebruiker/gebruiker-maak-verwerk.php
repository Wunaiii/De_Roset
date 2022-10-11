<?php
include 'database.php';

if (   $_POST['voornaam'] != ''
    && $_POST['achternaam'] != '' 
    && $_POST['email'] != ''
    && $_POST['wachtwoord'] != ''
    && $_POST['telefoonnummer'] != '' 
    && $_POST['geboortedatum'] != '')
    {

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $geboortedatum = $_POST['geboortedatum'];
    $klant = 'klant';

    $sql = "INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord, telefoonnummer, geboortedatum, rol)
            VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$telefoonnummer', '$geboortedatum', '$klant')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "New record created successfully";
        header("location: login.php");
    }
}
?>