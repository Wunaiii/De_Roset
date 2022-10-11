<?php
include 'database.php';
include 'headersettings.php';
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if (
            !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["geboortedatum"])
    ) {
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = htmlentities($_POST['geboortedatum']);

        $sql = "UPDATE gebruikers SET
         voornaam = '$voornaam',
         achternaam = '$achternaam',
         email = '$email',
         wachtwoord = '$wachtwoord',
         geboortedatum = '$date',
         telefoonnummer = '$telefoonnummer'
          WHERE id = ' $id' ";

        if (mysqli_query($conn, $sql)) {
            header("location: gebruiker-overzicht.php");
        }
    }
}
