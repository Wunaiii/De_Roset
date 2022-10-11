<?php
include 'database.php';
include 'headersettings.php';
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if ( !empty($_POST["opmerking"])
        && !empty($_POST["status"] ) )
    {
        $opmerking = $_POST["opmerking"];
        $status = $_POST["status"];
        $personeel_id = $_SESSION['gebruiker_id'];

        $sql = "UPDATE meldingen SET
         opmerking = '$opmerking',
         status = '$status',
         personeel_id = '$personeel_id'
          WHERE id = ' $id' ";

        if (mysqli_query($conn, $sql)) {
            header("location: melding-overzicht.php");
        }
    }
}   
?> 